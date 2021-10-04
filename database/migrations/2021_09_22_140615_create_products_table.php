<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            //or if we want an auto-increment id
            //$table->increments('id');
            //or this if we want to start from a specific value
            //$table->increments('id')->start_from(10);

            $table->string('name');
            $table->text('detail');
            $table->timestamps();
        });
        //if auto-increment
       // DB::statement("ALTER TABLE products AUTO_INCREMENT = 10;");
    }

    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
