<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'seo_key' => "Bali","Rent Car","Sewa Mobil","Sewa Mobil Bali","Tour","Wisata","Bali Tour and Travel", "Paket Wisata Gayatri", "Penawaran Tur Gayatri", "Liburan dengan Gayatri Tour", "Destinasi Wisata Populer Gayatri", "Harga Paket Tur Gayatri", "Pelayanan Terbaik dari Gayatri Tour", "Panduan Wisata Gayatri", "Penawaran Spesial Gayatri Tour", "Pengalaman Wisata Tak Terlupakan bersama Gayatri", "Pemesanan Tur Gayatri", "Jadwal Tur Gayatri", "Liburan Impian dengan Gayatri Tour and Travel", "Destinasi Internasional dan Domestik Gayatri", "Penawaran Last Minute Gayatri Tour",

        ];
        return view('dashboard',$data);
    }
}