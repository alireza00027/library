<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Book extends Model {
    use HasFactory;

    protected $fillable = ['user_id', 'category_id', 'title', 'writer', 'release_date', 'img', 'file'];


    /**
     * get image of book
     */
    public function getImage() {
        if (is_file(public_path("books/images/{$this->img}"))) {
            $url = url("books/images/{$this->img}");
            return $url;
        }
    }
}
