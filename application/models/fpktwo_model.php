<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Fpktwo_model extends CI_Model {

    public $table = 'tb_fpktwo';
    public $id = 'id_fpktwo';
    public $order = 'DESC';

    function __construct() {
        parent::__construct();
    }
    
    // get all
    function get_all() {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get('tb_fpktwo')->result();

        
    }

    public function get_fpktwo($id)
	{
			$this->db->select('*');
           	$this->db->from('tb_fpktwo');
           	$this->db->where('id_fpktwo', $id);
	        $query = $this->db->get();
	        return $query->result();
	}

    public function get_peserta($id)
    {
            $this->db->select('*');
            $this->db->from('tb_pesertatwo');
            $this->db->where('id_fpk', $id);
            $query = $this->db->get();
            return $query->result();
    }

	//fungsi select tabel faskes
    function get_faskes_bykode($kode_faskes){
        $hsl=$this->db->query("SELECT * FROM tb_faskes WHERE kode_faskes='$kode_faskes'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'kode_faskes' => $data->kode_faskes,
                    'nama_faskes' => $data->nama_faskes,
                    );
            }
        }
        return $hasil;
    }

    //fungsi select tabel program
    function get_faskes_bynama($uraian){
        $hsl=$this->db->query("SELECT * FROM tb_program WHERE uraian='$uraian'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'uraian' => $data->uraian,
                    'nama_program' => $data->nama_program,
                    'kode_program' => $data->kode_program,
                    'kode_akun' => $data->kode_akun,
                    'pel' => $data->pel,
                    );
            }
        }
        return $hasil;
    }

    //fungsi select tabel jejaring
    function get_byjaring($nama_jejaring){
        $hsl=$this->db->query("SELECT * FROM tb_jejaring WHERE nama_jejaring='$nama_jejaring'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'nama_jejaring' => $data->nama_jejaring,
                    'norek' => $data->norek,
                    'nonpwp' => $data->nonpwp,
                    );
            }
        }
        return $hasil;
    }

    //memanggil db pegawai
    public function get_kepala($id = 1)
    {
            $this->db->select('*');
            $this->db->from('tb_pegawai');
            $this->db->where('id_pegawai', $id);
            $query = $this->db->get();
            return $query->result();
    }

    //memanggil db pegawai
    public function get_pra($id = 2)
    {
            $this->db->select('*');
            $this->db->from('tb_pegawai');
            $this->db->where('id_pegawai', $id);
            $query = $this->db->get();
            return $query->result();
    }

    //memanggil db pegawai
    public function get_keu($id = 3)
    {
            $this->db->select('*');
            $this->db->from('tb_pegawai');
            $this->db->where('id_pegawai', $id);
            $query = $this->db->get();
            return $query->result();
    }

    //memanggil db pegawai
    public function get_verif($id = 4)
    {
            $this->db->select('*');
            $this->db->from('tb_pegawai');
            $this->db->where('id_pegawai', $id);
            $query = $this->db->get();
            return $query->result();
    }



    // get data by id
    function get_by_id($id) {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('kode_faskes', $q);
        $this->db->or_like('nama_faskes', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('kode_faskes', $q);
        $this->db->or_like('nama_faskes', $q);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data) {
       $this->db->insert('tb_fpktwo', $data);
        $id_fpktwo = $this->db->insert_id();
        return (isset($id_fpktwo)) ? $id_fpktwo : FALSE;

       // $this->db->insert($this->table, $data);
    }

    function tambah_peserta($result = array())
    {
        $total_array = count($result);
         
        if($total_array != 0)
        {
        $this->db->insert_batch('tb_pesertatwo', $result);
        }
    }

    /* function tambah_peserta($data)
    {
    
        $this->db->set($data);
        $this->db->insert('tb_pesertatwo');
        return $this->db->insert_id();
      //$this->db->insert('tb_pesertatwo', $data);
    }   */

    // update data
    function update($id, $data) {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id) {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file fpktwo_model.php */
/* Location: ./application/models/fpktwo_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-05-14 11:06:57 */
/* http://harviacode.com */