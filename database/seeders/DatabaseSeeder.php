<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'friska',
            'isrole' => '1',
            'namerole' => 'administrator',
            'email' => 'friska078@gmail.com',
            'password' => bcrypt('friska078')

        ]);
    }
}
