<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Book::create([
            'user_id' => 1,
            'category_id' => 1,
            'title' => 'کتاب تستی',
            'writer' => 'نویسنده تستی',
            'img' => 'test.png',
            'file' => 'test.pdf',
            'release_date' => '1385',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
