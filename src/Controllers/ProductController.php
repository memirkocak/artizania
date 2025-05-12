<?php

namespace MVC\Controllers;
use MVC\Models\ProductManager;


class ProductController
{

    public function __construct()
    {
        $this->productManager = new \MVC\Models\ProductManager();
    }

    public function index()
    {
        require VIEWS . 'App/homepage.php';
    }

    public function store()
    {

        htmlspecialchars($name = $_POST['name']);
        htmlspecialchars($description = $_POST['description']);
        htmlspecialchars($image = $_POST['image']);
        htmlspecialchars($price = $_POST['price']);
        htmlspecialchars($category = $_POST['category']);

        $product = $this->productManager->store($name, $description, $image, $price, $category);
        
        header("Location: /admin/shop/");
    }

    public function shop()
    {
        $products = $this->productManager->all();
        require VIEWS . 'App/shop.php';
    }

}