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
            $table->foreignId('service_category_id');
            $table->string('title');
            $table->longText('description')->nullable();
            $table->timestamps();
        });

        DB::table('services')->insert([
            [
                'service_category_id' => 1,
                'title' => 'Staff Portraits',
                'description' => 'Editorial images offer photographers a way to explore their creative freedom while telling a story.'
            ],
            [
                'title' => 'Advertising Photography',
                'description' => "Good advertising photography persuades you to purchase something that you don't really need. It works by putting products, goods or services in front of an audience, and then convincing them to be interested."
            ],
            [
                'title' => 'Portrait Photography',
                'description' => "Good portrait photographers are able to capture the personality and emotion of people around them, along with earning money via wedding photography, senior portraits, family photography sessions, and so on."
            ],
            [
                'title' => 'Food & Drink Photography',
                'description' => 'It builds a brand and tells a story. As a restaurant owner, you have the chance to control how the world perceives your restaurant. You are in control of what you show and what image you put out to the world. Professional food photos can help you build a brand that stands out and shapes your restaurant identity.'
            ],
            // [
            //     'title' => 'Cookbook Photography',
            // ],
            // [
            //     'title' => 'Restaurant & Hospitality Photography'
            // ],
            [
                'title' => 'Event Photography',
                'description'=> "Photographers understand unique angles to make shots look more interesting and know little tricks to getting the best expressions out of your guests. Not only will a photographer thoroughly capture your event, we will also take the time afterwards to go through each and every photo and select the best shots."
            ],
            // [
            //     'title' => 'Social Media & Email Marketing Photography'
            // ],
            // [
            //     'title' => 'Floral Photography'
            // ],
            // [
            //     'title' => 'Corporate Photography'
            // ],
            // [
            //     'title' => 'Filming and Editing'
            // ],
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
