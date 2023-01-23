<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class UserController extends Controller {
    /**
     * user panel page
     */
    public function index() {
        $user = auth()->user();
        $myBooks = Book::where('user_id', $user->id)->latest()->get();
        foreach ($myBooks as $book) {
            $book->image = $book->getImage();
        }

        return view('user.index', compact('myBooks'));
    }
}
