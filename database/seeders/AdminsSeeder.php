<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i=0; $i < 4; $i++) {
            $admin = new User();
            $admin->role_id = 2;
            $admin->name = $faker->name();
            $admin->email = Str::slug($admin->name).'@gmail.com';
            $admin->password = Hash::make('1234567890');
            $admin->save();
        }
    }
}
