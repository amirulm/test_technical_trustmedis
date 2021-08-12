<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class M_pegawai extends CI_Model {

    public function getDataPegawai(){
        $query = $this->db->get('master_dokter');
        return $query->result();
    }
    public function getDataPegawaiDetail($pegawai_id)
    {
        $this->db->where('pegawai_id', $pegawai_id);
        $query = $this->db->get('master_dokter');
        return $query->row();
    }
    public function updatepegawai($pegawai_id, $data)
    {
        $this->db->where('pegawai_id',$pegawai_id);
        $this->db->update('master_dokter',$data);

    }
    public function deletepegawai($pegawai_id)
    {
        $this->db->where('pegawai_id',$pegawai_id);
        $this->db->delete('master_dokter');
    }
    public function getdataklinik()
    {
        $query = $this->db->get('master_unit');
        return $query->result();
    }
    public function getdataklinikdetail($unit_id)
    {
        $this->db->where('unit_id', $unit_id);
        $query = $this->db->get('master_unit');
        return $query->row();
    }
    public function updateklinik($unit_id,$data)
    {
        $this->db->where('unit_id', $unit_id);
        $this->db->update('master_unit',$data);
    }
    public function deleteklinik($unit_id)
    {
        $this->db->where('unit_id',$unit_id);
        $this->db->delete('master_unit');
    }
}