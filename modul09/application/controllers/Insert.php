<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Insert extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('insert_model');
    }
    public function index()
    {
        $data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
        $data['css'] = $this->load->view('include/css.php', NULL, TRUE);
        $data['header'] = $this->load->view('pages/header.php', NULL, TRUE);
        $data['footer'] = $this->load->view('pages/footer.php', NULL, TRUE);
        $data['category'] = $this->insert_model->get_category();
        $data['supplier'] = $this->insert_model->get_supplier();
        $this->load->view('pages/insertview', $data);
    }
    public function insert_action()
    {
        $values = array(
            'id_product' => NULL,
            'product_name' => $this->input->post('product_name'),
            'qty_per_unit' => $this->input->post('qty_per_unit'),
            'price' => $this->input->post('price'),
            'id_supplier' => $this->input->post('id_supplier'),
            'id_category' => $this->input->post('id_category')
        );
        $this->insert_model->insert($values);
        header("Location: http://localhost/modul09/");
    }
}
