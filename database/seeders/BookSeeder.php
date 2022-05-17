<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = factory(Book::class, 10)->create();
        // DB::table('books')->insert([
        //     'Category' => 'Makanan',
        //     'Name' => 'Barang',
        //     'Price' => 10000,
        //     'Quantity' => 10,
        //     'Image'=> '',
        //     'genreId' => '1'
        // ]);
    }
}
