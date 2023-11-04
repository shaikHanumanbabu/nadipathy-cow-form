<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTeluguMarqueeToMarqueeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marquees', function (Blueprint $table) {
            $table->string('telugu_marquee_text')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('marquees', function (Blueprint $table) {
            $table->dropColumn('telugu_marquee_text');
        });
    }
}
