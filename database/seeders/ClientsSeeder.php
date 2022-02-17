<?php

namespace Database\Seeders;

use App\Models\Client;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i=0; $i < 6; $i++) {
            $client = new Client();
            $client->name = $faker->name();
            $client->email = Str::slug($client->name).'@gmail.com';
            $client->phone_number = $faker->phoneNumber();
            $client->save();
        }
    }
}
