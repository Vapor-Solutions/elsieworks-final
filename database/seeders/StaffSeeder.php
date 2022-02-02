<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Factory::create();
        for ($i=0; $i < 24; $i++) {
            $admin = new User();
            $admin->role_id = $i%3==0?3:($i%3==1?4:5);
            $admin->name = $faker->name();
            $admin->email = Str::slug($admin->name).'@gmail.com';
            $admin->password = Hash::make('1234567890');
            $admin->save();
        }
    }
}
