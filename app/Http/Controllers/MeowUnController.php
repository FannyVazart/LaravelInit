<?php

namespace App\Http\Controllers;

class MeowUnController extends Controller
{
    public function show($id) {
        return view('meow-details', [
            "aaa" => $id
        ]);
    }
}
