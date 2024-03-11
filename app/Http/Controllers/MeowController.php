<?php

namespace App\Http\Controllers;

class MeowController extends Controller
{
    public function show() {
        return view('meows-list');
    }
}
