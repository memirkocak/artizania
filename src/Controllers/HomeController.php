<?php

namespace MVC\Controllers;

class HomeController
{
    public function index()
    {
        require VIEWS . 'App/homepage.php';
    }

    public function showShop()
    {
        require VIEWS . 'admin/store.php';
    }

    public function admin()
    {
        require VIEWS . 'admin/admin.php';

    }
}