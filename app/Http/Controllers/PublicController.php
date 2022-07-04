<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function artwork(){
        return view('artwork');
    }

    public function store(){
        return view('form-create');
    }

    public function edit(){
        return view('edit');
    }
}
