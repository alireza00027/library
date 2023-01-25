<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Reservation;
use App\Models\User;
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

        $myReserves = Reservation::where('user_id', $user->id)->with('book')->latest()->get();
        foreach ($myReserves as $reserve) {
            $reserve->bookImg = $reserve->book->getImage();
        }

        return view('user.index', compact('myBooks', 'myReserves'));
    }

    /**
     * update personal information of user
     */
    public function update(Request $request, User $user) {

        $this->validate($request, [
            'name' => 'required'
        ], [
            'name.required' => 'فیلد نام کاربری نمیتواند خالی باشد'
        ]);
        $user->update(['name' => $request->name]);
        return back()->with('success', 'اطالاعات با موفقیت ثبت شد');
    }
}
