<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function contact()
    {
        return view('layouts.contact');
    }
    function about() {
        return view('pages.about');
    }
    function store(Request $request) {
        $name = $request->name;
        return redirect()->route('thanks', ['name' => $name]);
    }
    function thanks($name) {
        return view('layouts.thankyou')->with(compact('name'));
    }
}