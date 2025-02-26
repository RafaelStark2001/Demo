<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function create() {
        return view('contac');
    }

    public function store (Request $request) {
        dd($request->all(), $request->user_name);
        //dd('Listo');
    }
}
