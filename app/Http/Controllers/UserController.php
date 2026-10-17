<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'role' => 'Administrator'
            ],
            [
                'id' => 2,
                'name' => 'John Smith',
                'email' => 'john@example.com',
                'role' => 'Cashier'
            ],
            [
                'id' => 3,
                'name' => 'Sarah Lee',
                'email' => 'sarah@example.com',
                'role' => 'Cashier'
            ],
            [
                'id' => 4,
                'name' => 'Michael Cruz',
                'email' => 'michael@example.com',
                'role' => 'Manager'
            ],
            [
                'id' => 5,
                'name' => 'Emily Garcia',
                'email' => 'emily@example.com',
                'role' => 'Staff'
            ],
        ];

        return view('users', compact('users'));
    }
}