<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->date('birthdate')->nullable();
            $table->string('gender')->nullable();
            $table->string('blood')->nullable();
            $table->string('email')->nullable();
            $table->string('cellphone')->nullable();
            $table->string('address')->nullable();
            $table->string('profession')->nullable();
            $table->string('civil')->nullable();
            $table->date('ingress')->nullable();
            $table->string('schedule_id')->nullable();
            $table->integer('membership_id')->nullable();
            $table->date('payment')->nullable();
            $table->date('validity')->nullable();
            $table->integer('visits')->default(0);
            $table->string('comments')->nullable();
            $table->integer('status')->default(1);

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
        Schema::dropIfExists('members');
    }
}
