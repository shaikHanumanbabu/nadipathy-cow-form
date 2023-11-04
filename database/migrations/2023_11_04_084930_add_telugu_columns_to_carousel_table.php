<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTeluguColumnsToCarouselTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carousels', function (Blueprint $table) {
            $table->string('telugu_title');
            $table->string('telugu_caption');
            $table->string('telugu_btntext');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carousels', function (Blueprint $table) {
            $table->dropColumn('telugu_title')->nullable();
            $table->dropColumn('telugu_caption')->nullable();
            $table->dropColumn('telugu_btntext')->nullable();
        });
    }
}
