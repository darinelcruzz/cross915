<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');

            $table->string('description')->nullable()->nullable();
            $table->string('code')->nullable();
            $table->string('family')->nullable();
            $table->string('provider')->nullable();
            $table->string('img')->nullable();
            $table->integer('small')->default(0);
            $table->integer('medium')->default(0);
            $table->integer('large')->default(0);
            $table->double('amount')->nullable();

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
        Schema::dropIfExists('products');
    }
}