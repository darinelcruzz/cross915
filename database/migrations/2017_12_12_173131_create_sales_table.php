<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('client');
            $table->integer('p1')->default(0);
            $table->integer('q1')->default(0);
            $table->double('a1')->default(0);
            $table->integer('p2')->default(0);
            $table->integer('q2')->default(0);
            $table->double('a2')->default(0);
            $table->integer('p3')->default(0);
            $table->integer('q3')->default(0);
            $table->double('a3')->default(0);
            $table->integer('p4')->default(0);
            $table->integer('q4')->default(0);
            $table->double('a4')->default(0);
            $table->integer('p5')->default(0);
            $table->integer('q5')->default(0);
            $table->double('a5')->default(0);
            $table->double('total')->default(0);
            $table->date('paid')->nullable();

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
        Schema::dropIfExists('sales');
    }
}
