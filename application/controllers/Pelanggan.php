<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('username') == "")
        {
            $this->session->set_flashdata('danger', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>Anda belum Log in</div>');
            redirect(base_url(), 'refresh');
        }
    }

    // 06-07-2020

    public function index()
    {
        $data = ['title'    => 'Pelanggan'
                ];

        $this->template->load('template/index', 'pelanggan/lihat', $data);
        
    }

    // menampilkan list pelanggan 
    public function tampil_data_pelanggan()
    {
        $list = $this->pelanggan->get_data_pelanggan();

        $data = array();

        $no   = $this->input->post('start');

        foreach ($list as $o) {
            $no++;
            $tbody = array();

            $tbody[]    = "<div align='center'>".$no.".</div>";
            $tbody[]    = $o['pelanggan'];
            $tbody[]    = $o['no_telp'];
            $tbody[]    = $o['alamat'];
            $tbody[]    = "<span style='cursor:pointer' class='mr-3 text-primary edit-pelanggan' data-toggle='tooltip' data-placement='top' title='Ubah' data-id='".$o['id']."'><i class='fa fa-pencil-alt'></i></span><span style='cursor:pointer' class='text-danger hapus-pelanggan' data-toggle='tooltip' data-placement='top' title='Hapus' data-id='".$o['id']."' pelanggan='".$o['pelanggan']."'><i class='fa fa-trash-alt'></i></span>";
            $data[]     = $tbody;
        }

        $output = [ "draw"             => $_POST['draw'],
                    "recordsTotal"     => $this->pelanggan->jumlah_semua_pelanggan(),
                    "recordsFiltered"  => $this->pelanggan->jumlah_filter_pelanggan(),   
                    "data"             => $data
                ];

        echo json_encode($output);
    }

    // aksi proses simpan data pelanggan
    public function simpan_data_pelanggan()
    {
        $aksi           = $this->input->post('aksi');
        $id_pelanggan   = $this->input->post('id_pelanggan');
        $no_telp        = $this->input->post('no_telp');
        $pelanggan      = $this->input->post('nama_pelanggan');
        $alamat         = $this->input->post('alamat');

        $data = ['pelanggan'    => $pelanggan,
                 'no_telp'      => $no_telp,
                 'alamat'       => $alamat,
                 'created_at'   => date("Y-m-d", now('Asia/Jakarta'))
                ];

        if ($aksi == 'Tambah') {
            $this->bahan->input_data('mst_pelanggan', $data);
        } elseif ($aksi == 'Ubah') {
            $this->bahan->ubah_data('mst_pelanggan', $data, array('id' => $id_pelanggan));
        } elseif ($aksi == 'Hapus') {
            $this->bahan->hapus_data('mst_pelanggan', array('id' => $id_pelanggan));
        }

        echo json_encode($aksi);
    }

    // ambil data pelanggan
    public function ambil_data_pelanggan($id_pelanggan)
    {
        $data = $this->bahan->cari_data('mst_pelanggan', array("id" => $id_pelanggan))->row_array();

        echo json_encode($data);
    }

}

/* End of file Pelanggan.php */
