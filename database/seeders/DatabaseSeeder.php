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
            DB::table('proprietes')->insert(['name' => 'Propriété' . $i, 'adresse' => 'Adresse' .$i, 'description' => 'Description' . $i, 
                                            'prix' => $i*10000, 'superficie' => $i*10, 'chambre' => $i, 'douche' => $i, 'garage' => $i-1,
                                            'user_id' => 1]);
         
        }

        for($i = 11; $i < 21; $i++)
        {
            DB::table('proprietes')->insert(['name' => 'Propriété' . $i, 'adresse' => 'Adresse' .$i, 'description' => 'Description' . $i, 
                                            'prix' => $i*10000, 'superficie' => $i*10, 'chambre' => $i, 'douche' => $i, 'garage' => $i-1,
                                            'user_id' => 2]);
         
        }

        for($i = 21; $i < 31; $i++)
        {
            DB::table('proprietes')->insert(['name' => 'Propriété' . $i, 'adresse' => 'Adresse' .$i, 'description' => 'Description' . $i, 
                                            'prix' => $i*10000, 'superficie' => $i*10, 'chambre' => $i, 'douche' => $i, 'garage' => $i-1,
                                            'user_id' => 11]);
         
        }

        for($i = 31; $i < 41; $i++)
        {
            DB::table('proprietes')->insert(['name' => 'Propriété' . $i, 'adresse' => 'Adresse' .$i, 'description' => 'Description' . $i, 
                                            'prix' => $i*10000, 'superficie' => $i*10, 'chambre' => $i, 'douche' => $i, 'garage' => $i-1,
                                            'user_id' => 12]);
         
        }

        for($i = 41; $i < 51; $i++)
        {
            DB::table('proprietes')->insert(['name' => 'Propriété' . $i, 'adresse' => 'Adresse' .$i, 'description' => 'Description' . $i, 
                                            'prix' => $i*10000, 'superficie' => $i*10, 'chambre' => $i, 'douche' => $i, 'garage' => $i-1,
                                            'user_id' => 13]);
         
        }
    }
}
