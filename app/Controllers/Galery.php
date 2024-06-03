<?php

namespace App\Controllers;

class Galery extends BaseController
{
    public function index(): string
    {
        return view('galery');
    }
}