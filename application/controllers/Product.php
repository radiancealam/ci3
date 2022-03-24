<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = [
            "products" => $this->product_model->getAll(),
            "title" => "product"
        ];
        $this->load->view("product", $data);
    }
}
