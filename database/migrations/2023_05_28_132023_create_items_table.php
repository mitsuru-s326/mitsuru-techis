<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string("status", 100)->default('active');
            $table->string('title',100)->unique();
            $table->string('genre', 100);
            $table->string('time', 100);
            $table->text('introduction'); 
            $table->string('material', 100);
            $table->text('image')-> nullable();
            $table->integer('price')->length(8)->default(0);
            $table->string('recipe',100);
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
        Schema::dropIfExists('items');
    }
}
