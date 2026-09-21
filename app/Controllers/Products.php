<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Products extends BaseController
{
    private $productModel;
    public function __construct()
    {
        $this->productModel = new ProductModel();
    }
    public function index()
    {
        $data['products'] = $this->productModel->findAll();
        return view('products/index', $data);
    }
    public function create()
    {
        return view('products/create');
    }
    public function store()
    {
        $this->productModel->save([
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price')
        ]);
        return redirect()->to('/produtos');
    }
    public function edit($id = null)
    {
        $data['product'] = $this->productModel->find($id);
        // Blindagem: se o ID não existir no banco, volta pra lista
        if (empty($data['product'])) {
            return redirect()->to('/produtos');
        }
        return view('products/edit', $data);
    }
    public function update($id = null)
    {
        $this->productModel->update($id, [
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price')
        ]);
        return redirect()->to('/produtos');
    }
    public function delete($id = null)
    {
        $this->productModel->delete($id);
        return redirect()->to('/produtos');
    }
}
