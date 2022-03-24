<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $table = "products";

    public $id;
    public $name;
    public $price;
    public $description;

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'price',
            'label' => 'Price',
            'rules' => 'numeric'],
            
            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }
}
