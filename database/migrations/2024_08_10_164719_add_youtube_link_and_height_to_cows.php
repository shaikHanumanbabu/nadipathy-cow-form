<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddYoutubeLinkAndHeightToCows extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cows', function (Blueprint $table) {
            $table->string('youtube_link')->nullable();
            $table->string('height')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cows', function (Blueprint $table) {
            $table->dropColumn('youtube_link');
            $table->dropColumn('height');
        });
    }
}
