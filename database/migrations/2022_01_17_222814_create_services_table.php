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
                'title' => 'Corporate',
                'description' => 'Corporate coverage allows organisations to show and tell their milestones, plans and agendas to their partners and investors. We capture these moments in ways that are curated to suit what each organisation stands for.'
            ],
            [
                'title' => 'Advertising/Products',
                'description' => "Good advertising imagery persuades you to purchase something that you didn’t think you needed. We work with you by putting products, good or services in front of your ideal audience."
            ],
            [
                'title' => 'Portraits',
                'description' => "Good portraiture captures the personality and emotion of the person in front of the lens."
            ],
            [
                'title' => 'Events & Ceremonies',
                'description' => 'We Freeze time! When it comes to recording moments of your life, we are there with you every step of the way.'
            ],
            [
                'title' => 'Content Creation',
                'description' => 'With the digital age, the internet is the fastest way to get information and entertainment'
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
