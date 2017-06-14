<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outdocuments', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('from_id')->length(10)->unsigned();
            $table->integer('to_id')->length(10)->unsigned();
            $table->string('description');
            $table->boolean('is_urgent');
            $table->string('status');
            $table->integer('by_id')->nullable()->length(10)->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('outdocuments');
    }
}
