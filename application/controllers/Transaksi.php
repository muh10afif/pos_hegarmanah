<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('username') == "")
        {
            $this->session->set_flashdata('danger', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>Anda belum Log in</div>');
            redirect(base_url(), 'refresh');
        }
	}

	public function index()
	{
		$data 	= [
			'title'		=> 'Transaksi',
			'kategori'	=> $this->transaksi->get_kategori()->result_array(),
			'pelanggan'	=> $this->transaksi->get_data_order('mst_pelanggan','pelanggan','asc')->result_array()
		];

		$this->template->load('template/index','transaksi/lihat', $data);
	}

	// 04-10-2020
	public function simpan_list_transaksi()
	{
		$post 				= $this->input->post();
		$total_harga		= str_replace('.','', $post['total_harga']);
		$qty_list			= $post['qty_list'];
		$diskon_list		= str_replace('.','', $post['diskon_list']);
		$subtotal_list		= str_replace('.','', $post['subtotal_list']);
		$tunai				= str_replace('.','', $post['tunai']);
		$id_produk			= $post['id_produk'];
		$default_tanggal	= date('dmy', now('Asia/Jakarta'));

		$sts_pelanggan		= $this->input->post('sts_pelanggan');
		$id_pelanggan		= $this->input->post('id_pelanggan');
		$pel_baru			= $this->input->post('pel_baru');
		$no_telp			= $this->input->post('no_telp');
		$alamat				= $this->input->post('alamat');

		// untuk simpan transaksi

			if ($this->session->userdata('role') == 2 ) {
				$id_user = $this->session->userdata('id_user');
			} else {
				$id_user = $this->session->userdata('id_owner');
			}

			$transaksi = $this->transaksi->cari_data_kd_tr('trn_transaksi', ['id_user' => $id_user])->row_array();

			$bagian_tanggal 	= substr($transaksi['kode_transaksi'], 3, 6);
			$bagian_urutan 		= substr($transaksi['kode_transaksi'], 9, 7);
			
			if($default_tanggal == $bagian_tanggal)
			{
				$kode = $bagian_urutan + 1;
			}
			else
			{
				$kode = '1';
			}

			$generated_code		= str_pad($kode, 5, '0', STR_PAD_LEFT);
			$kode_transaksi		= "TRN$default_tanggal$generated_code";

			$id_o = $this->session->userdata('id_owner');

			if ($id_o == 0) {
				$id_u = $this->session->userdata('id_user');
			} else {
				$id_u = $id_o;
			}

			if ($sts_pelanggan == 'lama') {

				$id_pelanggan = $id_pelanggan;

			} else {

				$data_pel = ['pelanggan'	=> $pel_baru,
							 'no_telp'		=> $no_telp,
							 'alamat'		=> $alamat,
							 'created_at'	=> date("Y-m-d H:i:s", now('Asia/Jakarta'))
							];

				$this->transaksi->input_data('mst_pelanggan', $data_pel);
				$id_pelanggan = $this->db->insert_id();

			}

			$data_trn_transaksi	= [
				'id_user'			=> $id_u,
				'kode_transaksi'	=> $kode_transaksi,
				'total_harga' 		=> $total_harga,
				'tunai'				=> $tunai,
				'id_pelanggan'		=> $id_pelanggan,
				'created_by'		=> $this->session->userdata('id_user'),
				'created_at'		=> date("Y-m-d H:i:s", now('Asia/Jakarta'))
			];

			$this->db->insert('trn_transaksi', $data_trn_transaksi);
			$id_transaksi		= $this->db->insert_id();
			$batas_array 		= count($id_produk);	

			for($i = 0; $i < $batas_array; $i++)
			{

				$data_trn_detail_transaksi	= [
						'id_transaksi'		=> $id_transaksi,
						'id_product'		=> $id_produk[$i],
						'jumlah'			=> $qty_list[$i],
						'discount'			=> $diskon_list[$i],
						'subtotal'			=> $subtotal_list[$i],
						'created_at'		=> date("Y-m-d H:i:s", now('Asia/Jakarta'))
					];

				$this->transaksi->input_data('trn_detail_transaksi', $data_trn_detail_transaksi);


				// cari data di product
				$pro1 = $this->transaksi->cari_data('mst_stok', ['id_product' => $id_produk[$i]]);

				$pro = $pro1->row_array();

				if ($pro1->num_rows() > 0) {

					// input ke trn stok
					$data_trn_stok = [	'id_stok'		=> $pro['id'],
										'barang_masuk' 	=> 0,
										'barang_keluar'	=> $qty_list[$i],
										'barang_retur' 	=> 0,
										'created_at'	=> date("Y-m-d H:i:s", now('Asia/Jakarta'))
									];
					
					$this->transaksi->input_data('trn_stok', $data_trn_stok);
					
					// update ke mst stok
					$this->transaksi->ubah_data('mst_stok', ['stok' => ($pro['stok'] - $qty_list[$i])], ['id' => $pro['id']]);

				}

			} // end for

		$habis = $this->stok->get_stok_habis();

		$array = array(
			'stok_habis' => $habis
		);
		
		$this->session->set_userdata( $array );

		echo json_encode(['id_tr' => $id_transaksi, 'stok_habis' => $habis]);
	}

	public function add_row()
	{
		$id_product 	= $this->input->post('id_product');
		$product 		= $this->transaksi->cari_data('mst_product', ['id' => $id_product])->row();
		$mst_stok 		= $this->transaksi->cari_data('mst_stok', ['id_product' => $id_product])->row();
		$nama_product	= $product->nama_product;
		$id_product		= $product->id;
		$diskon 		= 0;
		$total_diskon 	= "Rp. 0";
		$harga 			= $product->harga;
		$total 			= "Rp. ".number_format($harga,0,'.','.');
		$total_diskon 	= "Rp. 0";
		$stok 			= $mst_stok->stok;

		echo json_encode([
			'status' 		=> 'Sukses', 
			'id_product'	=> $id_product,
			'nama_product'	=> $nama_product,
			'total' 		=> $total,
			'diskon'		=> $diskon,
			'total_diskon'	=> $total_diskon,
			'tot_bayar'		=> $total,
			'tot_tr'		=> $harga,
			'stok'			=> $stok
		]);
	}

	public function simpan_transaksi()
	{
		$post 				= $this->input->post();
		$total_harga		= $post['total_harga'];
		$total_diskon		= $post['total_diskon'];
		$nama_product		= $post['nama_product'];
		$jumlah				= $post['jumlah'];
		$discount			= $post['discount'];
		$subtotal			= $post['subtotal'];
		$nama_pelanggan		= $post['nama_pelanggan'];
		$alamat_pelanggan 	= $post['alamat_pelanggan'];
		$tanggal 			= date('Y-m-d');
		$default_tanggal	= date('dmy');
		$jumlah_transaksi 	= $this->transaksi->cari_data('trn_transaksi', ['created_at' => $tanggal])->num_rows();
		if($jumlah_transaksi < 1)
		{
			$kode = "1";
		}
		else
		{
			$transaksi 			= $this->transaksi->cari_data('trn_transaksi', ['created_at' => $tanggal])->row_array();
			$bagian_tanggal 	= substr($transaksi['kode_transaksi'], 3, 6);
			$bagian_urutan 		= substr($transaksi['kode_transaksi'], 9, 7);
			if(strtotime($default_tanggal) == strtotime($bagian_tanggal))
			{
				$kode = $bagian_urutan + 1;
			}
			else
			{
				$kode = '1';
			}
		}
		$generated_code		= str_pad($kode, 5, '0', STR_PAD_LEFT);
		$kode_transaksi		= "TRN$default_tanggal$generated_code";
		$data_trn_transaksi	= [
			'kode_transaksi'	=> $kode_transaksi,
			'total_harga' 		=> $total_harga,
			'total_discount'	=> $total_diskon,
			'nama_pelanggan'	=> $nama_pelanggan,
			'alamat_pelanggan'	=> $alamat_pelanggan,
			'created_at'		=> date("Y-m-d", now('Asia/Jakarta'))
		];
		$this->db->insert('trn_transaksi', $data_trn_transaksi);
		$id_transaksi		= $this->db->insert_id();
		$batas_array 		= count($nama_product);
		for($i = 0; $i < $batas_array; $i++)
		{
			$produk						= $this->transaksi->cari_data('mst_product', ['nama_product' => $nama_product[$i]])->row();
			$id_product 				= $produk->id;
			$data_trn_detail_transaksi	= [
				'id_transaksi'	=> $id_transaksi,
				'id_product'	=> $id_product,
				'jumlah'		=> $jumlah[$i],
				'discount'		=> $discount[$i],
				'subtotal'		=> $subtotal[$i],
				'created_at'	=> date("Y-m-d", now('Asia/Jakarta'))
			];
			$this->transaksi->input_data('trn_detail_transaksi', $data_trn_detail_transaksi);
			$stok           = 0;
	        $mst_stok       = $this->stok->get_stok($id_product);
	        $data_trn_stok  = [
	                    'id_stok'           => $mst_stok->id,
	                    'barang_masuk'      => 0,
	                    'barang_keluar'     => $jumlah[$i],
	                    'barang_retur'      => 0,
	                    'created_at'        => date("Y-m-d h:i:s", now('Asia/Jakarta'))
	                ];
	        $this->stok->add_stok($data_trn_stok);
	        $trn_stok       = $this->stok->get_trn_stok($mst_stok->id);
	        foreach ($trn_stok as $row) 
	        {
	            $stok       += ($row->barang_masuk - ($row->barang_keluar + $row->barang_retur));
	        }
	        $data_mst_stok  = [
	            'stok'      => $stok
	        ];
	        $this->stok->update(['id' => $mst_stok->id], $data_mst_stok);
		}
		
		echo json_encode(['status' => TRUE]);
	}

	public function cetak_faktur()
    {
        $data   = [
            'row'   => $this->transaksi->get_transaksi()
        ];
        $this->load->view('report/faktur', $data, FALSE);
    }

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */