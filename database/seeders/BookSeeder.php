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
        DB::table('books')->insert([
            'NamaPembeli' => 'Potter',
            'Barang' => 'Penghapus',
            'Jumlah' => 1,
            'Harga' => 10000,
            'Tanggal' => '2001-01-10',
            'Jam' => '12:55',
            'genreId' => '1'
        ]);
    }
}
