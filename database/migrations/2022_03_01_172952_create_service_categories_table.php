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
            $table->foreignId('service_id');
            $table->string('title');
            $table->string('description')->nullable();
            $table->timestamps();
        });

        DB::table('service_categories')->insert([
            [
                'service_id'=>4,
                'title'=>'Baby Showers',
            ],
            [
                'service_id'=>4,
                'title'=>'Birthdays',
            ],
            [
                'service_id'=>4,
                'title'=>'Graduation',
            ],
            [
                'service_id'=>4,
                'title'=>'Traditional Weddings',
            ],
            [
                'service_id'=>4,
                'title'=>'Church and Garden Weddings',
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
