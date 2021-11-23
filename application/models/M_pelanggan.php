<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelanggan extends CI_Model {

    // Menampilkan list pelanggan
    public function get_data_pelanggan()
    {
        $this->_get_datatables_query_pelanggan();

        if ($this->input->post('length') != -1) {
            $this->db->limit($this->input->post('length'), $this->input->post('start'));
            
            return $this->db->get()->result_array();
        }
    }

    var $kolom_order_pelanggan = [null, 'pelanggan', 'no_telp', 'alamat'];
    var $kolom_cari_pelanggan  = ['LOWER(pelanggan)', 'no_telp', 'LOWER(alamat)'];
    var $order_pelanggan       = ['id' => 'desc'];

    public function _get_datatables_query_pelanggan()
    {
        $this->db->from('mst_pelanggan'); 
        
        $b = 0;
        
        $input_cari = strtolower($_POST['search']['value']);
        $kolom_cari = $this->kolom_cari_pelanggan;

        foreach ($kolom_cari as $cari) {
            if ($input_cari) {
                if ($b === 0) {
                    $this->db->group_start();
                    $this->db->like($cari, $input_cari);
                } else {
                    $this->db->or_like($cari, $input_cari);
                }

                if ((count($kolom_cari) - 1) == $b ) {
                    $this->db->group_end();
                }
            }

            $b++;
        }

        if (isset($_POST['order'])) {

            $kolom_order = $this->kolom_order_pelanggan;
            $this->db->order_by($kolom_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
            
        } elseif (isset($this->order_pelanggan)) {
            
            $order = $this->order_pelanggan;
            $this->db->order_by(key($order), $order[key($order)]);
            
        }
        
    }

    public function jumlah_semua_pelanggan()
    {
        $this->db->from('mst_pelanggan'); 

        return $this->db->count_all_results();
    }

    public function jumlah_filter_pelanggan()
    {
        $this->_get_datatables_query_pelanggan();

        return $this->db->get()->num_rows();
        
    }

}

/* End of file M_pelanggan.php */
