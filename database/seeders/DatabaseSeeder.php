<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $array = ['Books', 'Clothing', 'Electronics', 'Food', 'Furniture', 'Others'];

        foreach ($array as $category) {
            Category::create([
                'category_name' => $category
            ]);
        }

        // $this->call(AdminSeeder::class);
        // $this->call(BookSeeder::class);
    }
}
