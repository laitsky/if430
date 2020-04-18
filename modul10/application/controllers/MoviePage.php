<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MoviePage extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('movies');
	}

	public function index()
	{

		$movies['data'] = $this->movies->ShowData();

		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar_movie', NULL, TRUE);
		$data['footer'] = $this->load->view('template/footer_movie', NULL, TRUE);

		$data['table'] = $this->load->view('template/table_movie', $movies, TRUE);

		$this->load->view('page/movie', $data);
	}

	public function ShowDetail($id)
	{
		$data['movie_data'] = $this->movies->ShowDetail($id);

		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar_movie', NULL, TRUE);
		$data['footer'] = $this->load->view('template/footer_movie', NULL, TRUE);

		$this->load->view('page/movie_details', $data);
	}

	public function AddMovie()
	{
		//image upload configuration
		$config['upload_path'] = './assets/poster/';
		$config['allowed_types']        = 'jpg|png';
		$config['max_size']             = 1024;

		$this->upload->initialize($config);

		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar_movie', NULL, TRUE);
		$data['footer'] = $this->load->view('template/footer_movie', NULL, TRUE);

		$this->form_validation->set_rules('title', 'Judul', 'required');
		$this->form_validation->set_rules('year', 'Tahun', 'required|integer|min_length[4]|max_length[5]');
		$this->form_validation->set_rules('director', 'Sutradara', 'required|max_length[30]');
		$this->form_validation->set_rules('poster', 'Poster', 'required');

		if ($this->form_validation->run() == FALSE && $this->upload->do_upload('poster') == FALSE) {
			$data['error'] = $this->upload->display_errors();
			$this->load->view('page/AddMovie', $data);
		} else {
			$this->upload->data();
			$this->movies->AddData();
			redirect('MoviePage');
		}
	}

	public function EditMovie($id)
	{
		//image upload configuration
		$config['upload_path'] = './assets/poster/';
		$config['allowed_types']        = 'jpg|png';
		$config['max_size']             = 1024;

		$this->upload->initialize($config);

		$data['movie_data'] = $this->movies->ShowDetail($id);
		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar_movie', NULL, TRUE);
		$data['footer'] = $this->load->view('template/footer_movie', NULL, TRUE);

		$this->form_validation->set_rules('title', 'Judul', 'required');
		$this->form_validation->set_rules('year', 'Tahun', 'required|integer|min_length[4]|max_length[5]');
		$this->form_validation->set_rules('director', 'Sutradara', 'required|max_length[30]');
		$this->form_validation->set_rules('poster', 'Poster', 'required');

		if ($this->form_validation->run() == FALSE && $this->upload->do_upload('poster') == FALSE) {
			$data['error'] = $this->upload->display_errors();
			$this->load->view('page/EditMovie', $data);
		} else {
			$this->upload->data();
			$this->movies->UpdateData();
			redirect('MoviePage');
		}
	}
}
