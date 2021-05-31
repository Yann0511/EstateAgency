<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Model::unguard();

        for($i = 1; $i < 11; $i++)
        {
            DB::table('users')->insert(['name' => 'User' . $i, 'email' => 'Email' .$i. '@gmail.com', 'password' => 'Password' . $i, 'role' => 'Role' . $i]);
         
        }
    }
}
