<?php

namespace Database\Seeders;
use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $book = factory(Book::class, 10)->create();
        \App\Models\Book::factory()->count(15)->create();
    }
}
