<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller {
    /**
     * main page
     */
    public function index() {

        $categories = Category::all();
        $categoryIds = $categories->pluck(['id'])->toArray();
        $selectedCategoryIds = array_rand($categoryIds, 3);
        foreach ($selectedCategoryIds as $id) {
            $category = Category::where('id', $id)->first();
            if ($category) {
                $categoryTitle = $category->title;
                $selectedCategories[$categoryTitle] = Book::where('category_id', $id)->with('category')->latest()->limit(10)->get();
            }
        }
        $latestBooks = Book::latest()->limit(10)->get();
        foreach ($latestBooks as $book) {
            $book->image = $book->getImage();
        }
        return view('main', compact('latestBooks', 'selectedCategories'));
    }

    /**
     * book list page
     */
    public function books() {
        $books = new Book();
        if ($search = request('searchBook')) {
            $books = $books->where('title', 'LIKE', '%' . $search . '%')
                ->orWhere('writer', 'LIKE', '%' . $search . '%');
        }
        $books = $books->orderBy('created_at')->get();

        return view('books', compact('books'));
    }
}
