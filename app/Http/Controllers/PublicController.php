<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
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

    public function edit($id){

        $artworks = Artwork::findOrFail($id);
        return view('edit',compact('artworks'));
    }
}
