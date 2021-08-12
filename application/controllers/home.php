<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pegawai');
	}
	public function index()
	{
		$this->load->view('home',array('pegawai'=> $this->m_pegawai->getDataPegawai(),'unit'=> $this->m_pegawai->getdataklinik()));
	}
	public function halaman_tambah_pegawai()
	{
		$this->load->view('halaman_tambah_pegawai');
	}
	public function halaman_edit_pegawai($pegawai_id)
	{
		$queryPegawaiDetail = $this->m_pegawai->getDataPegawaiDetail($pegawai_id);
		$data = array('queryPGWdet' => $queryPegawaiDetail);
		$this->load->view('halaman_edit_pegawai', $data);
	}
	public function tambah_klinik()
	{
		$this->load->view('tambah_klinik');
	}
	public function edit_klinik($unit_id)
	{
		$queryeditklinik = $this->m_pegawai->getdataklinikdetail($unit_id);
		$data = array('queryeditkli' => $queryeditklinik);
		$this->load->view('edit_klinik',$data);
	}
	public	function fungsitambah()
	{
		$pegawai_id = $this->input->post('pegawai_id');
		$pegawai_no = $this->input->post('pegawai_no');
		$pegawai_nama = $this->input->post('pegawai_nama');
		$pegawai_jenis_kel = $this->input->post('pegawai_jenis_kelamin');
		$pegawai_sip = $this->input->post('pegawai_sip');
		
		$arrinsert = array(
			'pegawai_id' => $pegawai_id,
			'pegawai_nomor' => $pegawai_no,
			'pegawai_nama' => $pegawai_nama,
			'pegawai_jenis_kelamin' => $pegawai_jenis_kel,
			'pegawai_sip' => $pegawai_sip
		);
		$this->db->insert('master_dokter',$arrinsert);
		echo "<pre>";
		print_r($arrinsert);
		echo "</pre>";
		redirect(base_url(''));
	}
	public function fungsiedit()
	{
		$pegawai_id = $this->input->post('pegawai_id');
		$pegawai_no = $this->input->post('pegawai_nomor');
		$pegawai_nama = $this->input->post('pegawai_nama');
		$pegawai_jenis_kel = $this->input->post('pegawai_jenis_kelamin');
		$pegawai_sip = $this->input->post('pegawai_sip');

		$arrupdate = array(
			'pegawai_nomor' => $pegawai_no,
			'pegawai_nama' => $pegawai_nama,
			'pegawai_jenis_kelamin' => $pegawai_jenis_kel,
			'pegawai_sip' => $pegawai_sip
		);
		$this->m_pegawai->updatepegawai($pegawai_id,$arrupdate);
		redirect(base_url(''));
	}
	public function fungsidelete($pegawai_id)
	{
		$this->m_pegawai->deletepegawai($pegawai_id);
		redirect(base_url(''));
	}
	public function fungsitambahklinik()
	{
		$unit_id = $this->input->post('unit_id');
		$unit_kode = $this->input->post('unit_kode');
		$unit_nama = $this->input->post('unit_nama');

		$arrinsert = array(
			'unit_id' => $unit_id,
			'unit_kode' => $unit_kode,
			'unit_nama' => $unit_nama
		);
		$this->db->insert('master_unit',$arrinsert);
		echo "<pre>";
		print_r($arrinsert);
		echo "</pre>";
		redirect(base_url(''));
	}
	public function fungsieditklinik()
	{
		$unit_id = $this->input->post('unit_id');
		$unit_kode = $this->input->post('unit_kode');
		$unit_nama = $this->input->post('unit_nama');

		$arrupdate = array(
			'unit_id' => $unit_id,
			'unit_kode' => $unit_kode,
			'unit_nama' => $unit_nama
		);
		$this->m_pegawai->updateklinik($unit_id,$arrupdate);
		redirect(base_url(''));
	}
	public function fungsideleteklinik($unit_id)
	{
		$this->m_pegawai->deleteklinik($unit_id);
		redirect(base_url(''));
	}
}