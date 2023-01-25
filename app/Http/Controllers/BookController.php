<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddBookRequest;
use App\Http\Requests\EditBookRequest;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

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
        $book->image = $book->getImage();
        $book->categoryTitle = $book->getCategoryTitle();
        return view('books.show', compact('book'));
    }

    /**
     * create book page
     */
    public function create() {
        $categories = Category::all();
        return view('books.create', compact('categories'));
    }

    /**
     * store book process
     */
    public function store(AddBookRequest $request) {
        $book = new Book();
        $book->user_id = auth()->user()->id;
        $book->title = $request->title;
        $book->category_id = $request->category_id;
        $book->writer = $request->writer;
        $book->release_date = $request->release_date;
        if ($request->hasFile('img')) {
            $bookImg = $request->file('img');
            $bookImgName = time() . $bookImg->getClientOriginalName();
            Image::make($bookImg)->resize(252, 324)->save(public_path("books/images/{$bookImgName}"));
            $book->img = $bookImgName;
        }
        if ($request->hasFile('book_file')) {
            $bookFile = $request->file('book_file');
            $bookFileName = time() . $bookFile->getClientOriginalName();
            $bookFile->move(public_path("books/files"));
            $book->file = $bookFileName;
        }
        $book->save();
        return back()->with('success', 'کتاب با موفقیت افزوده شد');
    }

    /**
     * edit book page
     */
    public function edit(Book $book) {
        $categories = Category::all();
        $book->image = $book->getImage();
        return view('books.edit', compact('book', 'categories'));
    }

    /**
     * update Book process
     */
    public function update(EditBookRequest $request, Book $book) {
        $book->category_id = $request->category_id;
        $book->title = $request->title;
        $book->writer = $request->writer;
        $book->release_date = $request->release_date;
        if ($request->hasFile('img')) {
            if (Storage::exists(public_path("books/images/{$book->img}"))) {
                Storage::delete(public_path("books/images/{$book->img}"));
            }
            $bookImg = $request->file('img');
            $bookImgName = time() . $bookImg->getClientOriginalName();
            Image::make($bookImg)->resize(252, 324)->save(public_path("books/images/{$bookImgName}"));
            $book->img = $bookImgName;
        }
        if ($request->hasFile('book_file')) {
            if (Storage::exists(public_path("books/files/{$book->file}"))) {
                Storage::delete(public_path("books/files/{$book->file}"));
            }
            $bookFile = $request->file('book_file');
            $bookFileName = time() . $bookFile->getClientOriginalName();
            $bookFile->move(public_path("books/files"));
            $book->file = $bookFileName;
        }
        $book->update();
        return back()->with('success', 'کتاب با موفقیت ویرایش شد');
    }

    /**
     * download book
     */
    public function download(Book $book) {
        $user = auth()->user();
        if ($user->reservations()->where('book_id', $book->id)->exists()) {
        } else {
            return back()->with('error', 'درصورت عدم رزرو این کتاب قادر به دانلود نیستید');
        }
    }
}
