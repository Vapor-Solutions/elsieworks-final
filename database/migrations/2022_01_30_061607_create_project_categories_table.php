<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateProjectCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });

        DB::table('project_categories')->insert([
            [
                'id'=>1,
                'title'=>'Conferences',
            ],
            [
                'id'=>2,
                'title'=>'Seminars',
            ],
            [
                'id'=>3,
                'title'=>'Internal Company Meetings',
            ],
            [
                'id'=>4,
                'title'=>'Trade Shows / Expos',
            ],
            [
                'id'=>5,
                'title'=>'Thought Leadership & Networking Events',
            ],
            [
                'id'=>6,
                'title'=>'Ceremonies and Galas',
            ],
            [
                'id'=>7,
                'title'=>'Job Fairs & Recruiting Events',
            ],
        ]);


        Schema::table('projects', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('project_categories')->cascadeOnDelete();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_categories');
    }
}
