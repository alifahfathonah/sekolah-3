<?php
class Ppdb extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_siswa');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index()
	{
		$jum = $this->m_siswa->siswa();
		$page = $this->uri->segment(3);
		if (!$page) :
			$offset = 0;
		else :
			$offset = $page;
		endif;
		$limit = 8;
		$config['base_url'] = base_url() . 'siswa/index/';
		$config['total_rows'] = $jum->num_rows();
		$config['per_page'] = $limit;
		$config['uri_segment'] = 3;
		//Tambahan untuk styling
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';
		$config['first_link'] = 'Awal';
		$config['last_link'] = 'Akhir';
		$config['next_link'] = 'Next >>';
		$config['prev_link'] = '<< Prev';
		$this->pagination->initialize($config);
		$x['page'] = $this->pagination->create_links();
		$x['data'] = $this->m_siswa->siswa_perpage($offset, $limit);
		$this->load->view('depan/v_ppdb', $x);
	}
	function auth()
	{
		$username = strip_tags(str_replace("'", "", $this->input->post('username')));
		$password = strip_tags(str_replace("'", "", $this->input->post('password')));
		$u = $username;
		$p = $password;
		$cadmin = $this->m_login->cekppdb($u, $p);
		echo json_encode($cadmin);
		if ($cadmin->num_rows() > 0) {
			redirect('');

			$this->session->set_userdata('masuk', true);
			$this->session->set_userdata('user', $u);
			$xcadmin = $cadmin->row_array();
			if ($xcadmin) {
				$this->session->set_userdata('akses', '1');
				$idadmin = $xcadmin['pengguna_id'];
				$user_nama = $xcadmin['pengguna_nama'];
				$this->session->set_userdata('idadmin', $idadmin);
				$this->session->set_userdata('nama', $user_nama);
				redirect('ppdb/dashboard');
			} else {
				$this->session->set_userdata('akses', '2');
				$idadmin = $xcadmin['pengguna_id'];
				$user_nama = $xcadmin['pengguna_nama'];
				$this->session->set_userdata('idadmin', $idadmin);
				$this->session->set_userdata('nama', $user_nama);
				redirect('admin/dashboard');
			}
		} else {
			echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
			redirect('admin/login');
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/login');
	}
}
