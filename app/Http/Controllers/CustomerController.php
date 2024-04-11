<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Customer;
use Inertia\Inertia;
use Redirect;


class CustomerController extends Controller
{
    public function store(Request $request){
        $data = $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            // Add validation rules for other fields if needed
        ]);

        Customer::create($data);

      
    }
}
