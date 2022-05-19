<?php
namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'notlp' => '0876543210',
            'password' => bcrypt('vincent'),
            'role' => 'admin'
        ]);

        // $user = factory(User::class, 3)->create();
    }
}
