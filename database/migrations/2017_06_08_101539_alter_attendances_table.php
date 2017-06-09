<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('attendances', function (Blueprint $table) {
            //
            $table->foreign('guest_id')->references('id')->on('users');
            $table->foreign('pic_id')->references('id')->on('users');
            $table->foreign('by_id')->references('id')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendances', function (Blueprint $table) {
            //
            $table->dropForeign(['guest_id']);
            $table->dropForeign(['pic_id']);
            $table->dropForeign(['by_id']);

        });
    }
}
