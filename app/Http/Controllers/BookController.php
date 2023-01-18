<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller {
    /**
     * list of books by category
     */
    public function list(Category $category) {
        return view('books.list');
    }

    /**
     * book single page
     */
    public function show(Book $book) {
        return view('books.show');
    }

    /**
     * create book page
     */
    public function create() {

        return view('books.create');
    }

    /**
     * store book process
     */
    public function store(Request $request) {
    }

    /**
     * edit book page
     */
    public function edit(Book $book) {
        return view('books.edit');
    }

    /**
     * update Book process
     */
    public function update(Request $request, Book $book) {
    }

    /**
     * download book
     */
    public function download(Book $book) {
    }
}
