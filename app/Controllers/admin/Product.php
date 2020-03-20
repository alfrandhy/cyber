<?php namespace App\Controllers\admin;

use CodeIgniter\Controller;
use App\Models\ProductModel;

class Product extends Controller
{
    // Buat variabel untuk menyimpan data model
    protected $ProductModel;
    // Buat variabel untuk menampung request
    protected $request;

    function __construct() {

        // Mendeklarasikan class ProductModel menggunakan $this->ProductModel
        $this->ProductModel = new ProductModel();
        // Mendeklarasikan service request menggunakan $this->request
        $this->request = \Config\Services::request();
        /* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Product 
        */
    }

    public function index()
    {
        // Memanggil function get_product() di dalam ProductModel dan menampungnya di variabel array product
        $data['product'] = $this->ProductModel->get_product();
        // Mengirim data ke dalam view
        return view('product/index', $data);
    }
}