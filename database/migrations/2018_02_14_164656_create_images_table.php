<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('item_id');
			$table->string('name');
			$table->integer('width');
			$table->integer('height');
			$table->integer('next_image')->nullable();
			$table->integer('prev_image')->nullable();
			$table->integer('sort_order')->default(0);
            $table->timestamps();
			
			$table->foreign('item_id')->references('id')->on('items');			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
