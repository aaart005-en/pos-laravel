<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'name' => 'Admin User',   'email' => 'admin@pos.test',  'role' => 'Administrator'],
            ['id' => 2, 'name' => 'OWL DRAKE',     'email' => 'OWL@pos.test',   'role' => 'Cashier'],
            ['id' => 3, 'name' => 'JEAN PAUL', 'email' => 'PAUL@pos.test', 'role' => 'Cashier'],
            ['id' => 4, 'name' => 'SPEEDY',    'email' => 'SPEEDY@pos.test',  'role' => 'Manager'],
            ['id' => 5, 'name' => 'LUFFY',   'email' => 'LUFFY@pos.test',  'role' => 'Inventory Clerk'],
        ];

        return view('users.index', ['users' => $users]);
    }
}