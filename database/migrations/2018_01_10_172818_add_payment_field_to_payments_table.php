<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPaymentFieldToPaymentsTable extends Migration
{
    public function up()
    {
        Schema::table('payments', function($table) {
            $table->integer('discount_id')->nullable();
            $table->date('date_start')->nullable();
        });

    }

    public function down()
    {
        Schema::table('payments', function($table) {
            $table->dropColumn('discount_id');
            $table->dropColumn('date_start');
        });

    }
}
