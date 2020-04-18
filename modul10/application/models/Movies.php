<?php 

	defined('BASEPATH') OR exit('No direct script access allowed !');

	class Movies extends CI_Model{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		public function ShowData()
		{
			
			$query = $this->db->query("SELECT * FROM tblmovie");

			return $query->result_array();
		}

		public function ShowDetail($id)
		{
			return $this->db->get_where('tblmovie', array('MovieID' => $id))->row_array();
		}

		public function AddData()
		{
			$data = array(
				'Title' => $this->input->post('title', true),
				'Year' => $this->input->post('year', true),
				'Director' => $this->input->post('director', true),
				'PosterLink' => "assets/poster/" . $this->upload->data('file_name')
			);

			$this->db->insert('tblmovie', $data);
		}

		public function UpdateData()
		{
			$data = array(
				'Title' => $this->input->post('title', true),
				'Year' => $this->input->post('year', true),
				'Director' => $this->input->post('director', true),
				'PosterLink' => "assets/poster/" . $this->upload->data('file_name')
			);

			$this->db->where('MovieID', $this->input->post('id'));
			$this->db->update('tblmovie', $data);
		}
	}

?>