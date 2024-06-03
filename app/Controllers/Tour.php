<?php

namespace App\Controllers;

class Tour extends BaseController
{
    public function index(): string
    {
        return view('tour');
    }
    public function tanahlot(): string
    {
        return view('tour/bedugul');
    }
    public function bedugul(): string
    {
        return view('tour/bedugul2');
    }
    public function ubud1(): string
    {
        return view('tour/ubud1');
    }
    public function ubud2(): string
    {
        return view('tour/ubud2');
    }
    public function karangasem1(): string
    {
        return view('tour/karangasem1');
    }
    public function karangasem2(): string
    {
        return view('tour/karangasem2');
    }
    public function badung(): string
    {
        return view('tour/badung');
    }
}