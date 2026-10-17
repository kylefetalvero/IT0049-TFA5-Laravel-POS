<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
    [
        'id' => 1,
        'name' => 'Alyssa Mercado',
        'email' => 'alyssa.mercado@example.com',
        'phone' => '09171234567'
    ],
    [
        'id' => 2,
        'name' => 'Nathan Villareal',
        'email' => 'nathan.villareal@example.com',
        'phone' => '09182345678'
    ],
    [
        'id' => 3,
        'name' => 'Bianca Navarro',
        'email' => 'bianca.navarro@example.com',
        'phone' => '09193456789'
    ],
    [
        'id' => 4,
        'name' => 'Ethan Valdez',
        'email' => 'ethan.valdez@example.com',
        'phone' => '09204567891'
    ],
    [
        'id' => 5,
        'name' => 'Camille Santiago',
        'email' => 'camille.santiago@example.com',
        'phone' => '09215678912'
    ],
];

        return view('customers', compact('customers'));
    }
}