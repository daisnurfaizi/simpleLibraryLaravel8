<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin perpus',
            'email' => 'admin@perpus.test',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole('admin');
    }
}
