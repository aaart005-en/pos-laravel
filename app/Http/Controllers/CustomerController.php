<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['id' => 1, 'name' => 'FEU TECH',   'email' => 'FEU TECH@example.com', 'phone' => '0917-111-2222', 'address' => 'Quezon City'],
            ['id' => 2, 'name' => 'OUTDOOR BOYS', 'email' => 'OUTDOOR@example.com',  'phone' => '0918-222-3333', 'address' => 'Manila'],
            ['id' => 3, 'name' => 'MARKIPLIER',      'email' => 'MARKIPLIER@example.com',   'phone' => '0919-333-4444', 'address' => 'Makati'],
            ['id' => 4, 'name' => 'JOE',  'email' => 'JOE@example.com', 'phone' => '0920-444-5555', 'address' => 'Pasig'],
            ['id' => 5, 'name' => 'CASEOH',    'email' => 'CASEOH@example.com',  'phone' => '0921-555-6666', 'address' => 'Taguig'],
        ];

        return view('customers.index', ['customers' => $customers]);
    }
}