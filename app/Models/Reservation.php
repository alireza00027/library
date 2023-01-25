<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model {
    use HasFactory;
    protected $fillable = ['user_id', 'Book_id', 'start_reserve'];

    /**
     * user relation
     */
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * book relation 
     */
    public function book() {
        return $this->belongsTo(Book::class, 'book_id');
    }
}
