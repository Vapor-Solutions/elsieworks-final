<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateServiceCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->timestamps();
        });

        DB::table('service_categories')->insert([
            [
                'title'=>'Corporate Photography',
                'description'=>'Entails business packages for conferencing and retreat coverage'
            ],
            [
                'title'=>'Event Photography',
                'description' => 'Includes the photography and video coverage of events.'
            ],
            [
                'title'=>'Decor & System Setup',
                'description'=>'Involves the setting up for your next shoot and interior setup to go along with it'
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
        Schema::dropIfExists('service_categories');
    }
}
