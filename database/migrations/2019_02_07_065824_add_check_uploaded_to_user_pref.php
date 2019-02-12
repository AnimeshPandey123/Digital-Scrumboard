<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCheckUploadedToUserPref extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_preferences', function (Blueprint $table)
        {
            $table->boolean('picture_uploaded')->default(0);
            $table->boolean('notify')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('user_preferences', function (Blueprint $table)
        {
            $table->dropColumn('picture_uploaded');
            $table->dropColumn('notify');
        });
    }
}
