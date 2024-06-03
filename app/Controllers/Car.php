<?php

namespace App\Controllers;

class Car extends BaseController
{
    public function index(): string
    {
        return view('car');
    }
}