<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->string('branch')->nullable();
            $table->integer('people');
            $table->integer('floor');
            $table->integer('number_room');
            $table->integer('view_account')->default(0);
            $table->string('description')->nullable();
            $table->string('image');
            $table->integer('total_money');
            $table->integer('actual_total');
            $table->string('payment_method');
            $table->float('rating')->default(0);
            $table->string('status')->default(0);
            $table->timestamps();
           $table->foreign('category_id')->references('id')->on('categories')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
