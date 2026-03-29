<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Data Dinamis yang akan dikirim ke View
    $flowers = [
        [
            'nama' => 'Bunga Mawar',
            'harga' => 'Rp 25.000',
            'deskripsi' => 'Simbol cinta sejati yang abadi dan elegan.',
            'img' => 'https://images.pexels.com/photos/12366357/pexels-photo-12366357.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load',
            'badge' => 'Premium',
        ],
        [
            'nama' => 'Bunga Aster',
            'harga' => 'Rp 10.000',
            'deskripsi' => 'Bunga Aster warna yang cerah dan menarik.',
            'img' => 'https://images.pexels.com/photos/6913066/pexels-photo-6913066.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load',
            'badge' => 'Baru',
        ],
        [
            'nama' => 'Bunga Matahari',
            'harga' => 'Rp 15.000',
            'deskripsi' => 'Memberikan keceriaan di setiap sudut ruangan.',
            'img' => 'https://images.pexels.com/photos/17890606/pexels-photo-17890606.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load',
            'badge' => 'Terlaris',
        ],
    ];

    // Mengirim variabel $flowers ke view 'welcome'
    return view('welcome', compact('flowers'));
});
