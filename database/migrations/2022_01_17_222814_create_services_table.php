<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description')->nullable();
            $table->timestamps();
        });

        DB::table('services')->insert([
            [
                'title' => 'Editorial Photography'
            ],
            [
                'title' => 'Advertising Photography'
            ],
            [
                'title' => 'Portrait Photography'
            ],
            [
                'title' => 'Food & Drink Photography'
            ],
            [
                'title' => 'Cookbook Photography'
            ],
            [
                'title' => 'Restaurant & Hospitality Photography'
            ],
            [
                'title' => 'Event Photography'
            ],
            [
                'title' => 'Social Media & Email Marketing Photography'
            ],
            [
                'title' => 'Floral Photography'
            ],
            [
                'title' => 'Corporate Photography'
            ],
            [
                'title' => 'Filming and Editing'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
