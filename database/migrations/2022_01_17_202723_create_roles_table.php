<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });


        DB::table('roles')->insert([
            [
                'id' => 1,
                'title' => 'Superior Administrator',
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'id' => 2,
                'title' => 'Administrator',
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'id' => 3,
                'title' => 'Accountant',
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'id' => 4,
                'title' => 'Sales & Marketing',
                'created_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'id' => 5,
                'title' => 'ICT Department',
                'created_at' => Carbon::now()->toDateTimeString()
            ],
        ]);


        Schema::table('users', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
