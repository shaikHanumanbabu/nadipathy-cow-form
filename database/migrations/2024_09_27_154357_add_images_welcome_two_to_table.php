<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImagesWelcomeTwoToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('welcome_twos', function (Blueprint $table) {
            //
            $table->string('image_one')->nullable();
            $table->string('image_two')->nullable();
            $table->string('image_three')->nullable();
            $table->string('image_four')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('welcome_twos', function (Blueprint $table) {
            
            $table->dropColumn('image_one');
            $table->dropColumn('image_two');
            $table->dropColumn('image_three');
            $table->dropColumn('image_four');
        });
    }
}
