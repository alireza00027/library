<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {
    /**
     * user panel page
     */
    public function index() {
        return view('user.index');
    }
}
