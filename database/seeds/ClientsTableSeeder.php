<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Client;
class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'name' => 'amine',
            'email' => 'client@test.com',
            'password' => Hash::make('test12345') ,
            "is_client"=>True ,
            'remember_token'=> Str::random(10),
        ]);
    }
}
