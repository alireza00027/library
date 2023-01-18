<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Category::create(['title' => 'سیاسی']);
        Category::create(['title' => 'فرهنگی']);
        Category::create(['title' => 'رمان']);
        Category::create(['title' => 'کودک']);
        Category::create(['title' => 'ورزشی']);
        Category::create(['title' => 'انگیزشی']);
        Category::create(['title' => 'علمی']);
    }
}
