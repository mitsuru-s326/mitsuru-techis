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
            $table->string("status",100)->default('active');
            $table->string('title',100)->charser("utf8");
            $table->string('genre', 100);
            $table->string('time', 100);
            $table->string('introduction',400); 
            $table->string('material',400);
            $table->text('image')-> nullable();
            $table->integer('price')->length(8)->default(0);
            $table->string('recipe',400);
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
