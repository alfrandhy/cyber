<?php namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table;

    public function __construct()
    {
        parrent::__construct();
        $db = \Config\Database::connect();
        $this->table = $this->db->table('products');
    }

    public function get_product()
    {
        return $this->table->get()->getResultArray();
    }
}