<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddBookRequest;
use App\Http\Requests\EditBookRequest;
use App\Models\Book;
use App\Models\Category;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;


class BookController extends Controller {
    /**
     * list of books by category
     */
    public function list(Category $category) {
        $books = Book::where('category_id', $category->id)->orderBy('updated_at', 'DESC')->get();
        return view('books.list', compact('category', 'books'));
    }

    /**
     * book single page
     */
    public function show(Book $book) {
        $reserve = false;
        if (auth()->check()) {
            $reserve = (auth()->user()->id == $book->id) ? true : true;
            $reserve = Reservation::where('book_id', $book->id)->where('user_id', auth()->user()->id)->exists();
        }
        $book->image = $book->getImage();
        $book->categoryTitle = $book->getCategoryTitle();
        return view('books.show', compact('book', 'reserve'));
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
            $bookFile->move("books/files/", $bookFileName);
            $book->file = $bookFileName;
        }
        $book->save();
        return back()->with('success', 'کتاب با موفقیت افزوده شد');
    }

    /**
     * edit book page
     */
    public function edit(Book $book) {
        if ($book->user_id == auth()->user()->id) {
            $categories = Category::all();
            $book->image = $book->getImage();
            return view('books.edit', compact('book', 'categories'));
        } else {
            return back()->with('error', 'شما دسترسی به این بخش را ندارید');
        }
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
            if (File::exists(public_path("books/images/{$book->img}"))) {
                File::delete(public_path("books/images/{$book->img}"));
            }
            $bookImg = $request->file('img');
            $bookImgName = time() . $bookImg->getClientOriginalName();
            Image::make($bookImg)->resize(252, 324)->save(public_path("books/images/{$bookImgName}"));
            $book->img = $bookImgName;
        }
        if ($request->hasFile('book_file')) {
            if (File::exists(public_path("books/files/{$book->file}"))) {
                File::delete(public_path("books/files/{$book->file}"));
            }
            $bookFile = $request->file('book_file');
            $bookFileName = time() . $bookFile->getClientOriginalName();
            $bookFile->move("books/files/", $bookFileName);
            $book->file = $bookFileName;
        }
        $book->update();
        return back()->with('success', 'کتاب با موفقیت ویرایش شد');
    }

    /**
     * download book
     */
    public function download(Book $book) {
        if (auth()->check()) {
            $user = auth()->user();
            if ($user->reservations()->where('book_id', $book->id)->exists() or $book->user_id == $user->id) {
                return response()->download(public_path("books/files/{$book->file}"));
            } else {
                return back()->with('error', 'درصورت عدم رزرو این کتاب قادر به دانلود نیستید');
            }
        } else {
            return back()->with('error', 'لطفا ابتدا وارد سایت شوید');
        }
    }

    /**
     * reserve a book
     */
    public function reserve(Book $book) {
        if (auth()->check()) {
            if (Reservation::where('user_id', auth()->user()->id)->where('book_id', $book->id)->exists()) {
                return back()->with('error', 'شما این کتاب زا از قبل رزرو کرده اید،به پنا خود مراجعه کنید');
            }
            if ($book->user_id == auth()->user()->id) {
                return back()->with('error', 'شما کتابی را که خودتان ثبت کرده اید را نمتوانید رزرو کنید');
            }
            $reserve = new Reservation();
            $reserve->user_id = auth()->user()->id;
            $reserve->book_id = $book->id;
            $reserve->file = $book->file;
            $reserve->start_reserve = now();
            $reserve->save();
            if ($reserve) {
                return redirect()->route('user.panel')->with('success', 'کتاب با موفقیت رزرو شد');
            } else {
                return back()->with('error', 'مشکلی رخ داده است');
            }
        } else {
            return back()->with('error', 'لطفا ابتدا وارد سایت شوید');
        }
    }
}
