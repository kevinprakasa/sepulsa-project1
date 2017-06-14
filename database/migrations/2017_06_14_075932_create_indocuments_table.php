<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indocuments', function (Blueprint $table) {
          $table->increments('id');
          $table->date('date');
          $table->integer('from_id')->length(10)->unsigned();
          $table->integer('to_id')->length(10)->unsigned();
          $table->string('description');
          $table->boolean('is_verified');
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
        Schema::dropIfExists('indocuments');
    }
}
