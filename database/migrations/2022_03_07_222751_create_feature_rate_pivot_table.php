<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeatureRatePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_rate', function (Blueprint $table) {
            $table->unsignedBigInteger('feature_id')->index();
            $table->foreign('feature_id')->references('id')->on('features')->onDelete('cascade');
            $table->unsignedBigInteger('rate_id')->index();
            $table->foreign('rate_id')->references('id')->on('rates')->onDelete('cascade');
            $table->primary(['feature_id', 'rate_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feature_rate');
    }
}
