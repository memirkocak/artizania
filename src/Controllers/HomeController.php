<?php

namespace MVC\Controllers;

class HomeController
{
    public function index()
    {
        require VIEWS . 'App/homepage.php';
    }
}