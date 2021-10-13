<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

Class GenericController extends Controller {
    public function genericPage(Request $request) {
        echo $request->url;
        return view('generic.index');
    }
}