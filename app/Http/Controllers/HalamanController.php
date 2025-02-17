<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{

    function rules()
    {
        return view('halaman.rules', [
            'title' => "rules"
        ]);
    }

    function about()
    {
        return view('halaman.about', [
            'title' => "about"
        ]);
    }

    function blog()
    {
        return view('halaman.blog', [
            'title' => "blog"
        ]);
    }

    function contact()
    {
        return view('halaman.contact', [
            'title' => "contact"
        ]);
    }
}
