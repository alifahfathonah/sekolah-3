<?php
class Pendaftaran extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		};
		$this->load->model('m_pendaftaran');
		$this->load->library('upload');
	}


	function index()
	{
		$x['data'] = $this->m_pendaftaran->get_all_pendaftaran();
		$this->load->view('admin/v_pendaftaran', $x);
	}

	function simpan_pendaftaran()
	{
		$judul = strip_tags($this->input->post('xjudul'));
		$deskripsi = $this->input->post('xdeskripsi');
		$this->m_pendaftaran->simpan_pendaftaran($judul, $deskripsi);
		echo $this->session->set_flashdata('msg', 'success');
		redirect('admin/pendaftaran');
	}

	function update_pendaftaran()
	{
		$kode = strip_tags($this->input->post('kode'));
		$judul = strip_tags($this->input->post('xjudul'));
		$deskripsi = $this->input->post('xdeskripsi');
		$this->m_ppendaftaran->update_pendaftaran($kode, $judul, $deskripsi);
		echo $this->session->set_flashdata('msg', 'info');
		redirect('admin/pendaftaran');
	}
	function hapus_pendaftaran()
	{
		$kode = strip_tags($this->input->post('kode'));
		$this->m_pendaftaran->hapus_ppendaftaran($kode);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('admin/pengumuman');
	}
}
