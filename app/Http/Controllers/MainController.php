<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller {
    /**
     * main page
     */
    public function index() {
        return view('main');
    }
}
