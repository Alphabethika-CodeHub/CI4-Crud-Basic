<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Product_model;
 
class ProductController extends Controller
{

    public function index()
    {
        $model = new Product_model();
        $data['product'] = $model->getProduct();
        $data['title'] = "CI4 Crud Basic";
        echo view('index',$data);
    }

    public function insertData()
    {
        $model = new Product_model();
        $data = array(
            'name'  => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
        );
        $model->saveProduct($data);
        return redirect()->to('/productcontroller');
    }

    public function editIndex($id)
    {
        $model = new Product_model();
        $data['product'] = $model->getProduct($id)->getRow();
        echo view('edit_product', $data);
    }
 
    public function updateData()
    {
        $model = new Product_model();
        $id = $this->request->getPost('id');
        $data = array(
            'name'  => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
        );
        $model->updateProduct($data, $id);
        return redirect()->to('/productcontroller');
    }

    public function deleteData($id)
    {
        $model = new Product_model();
        $model->deleteProduct($id);
        return redirect()->to('/productcontroller');
    }
 
}