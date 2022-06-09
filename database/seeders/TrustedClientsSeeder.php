<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\TrustedClient;
use Illuminate\Database\Seeder;

class TrustedClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 2; $i++) {
            $trustedClient = new TrustedClient();
            $trustedClient->client_id = random_int(1, count(Client::all()));
            while (Client::where('client_id',$trustedClient->client_id)->exists() ) {
                $trustedClient->client_id = random_int(1, count(Client::all()));
            }
            $trustedClient->save();
        }
    }
}
