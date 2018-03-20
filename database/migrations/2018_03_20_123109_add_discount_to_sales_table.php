<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDiscountToSalesTable extends Migration
{
    public function up()
    {
        Schema::table('sales', function($table) {
            $table->double('discount')->default(0);
        });

    }

    public function down()
    {
        Schema::table('sales', function($table) {
            $table->dropColumn('discount');
        });

    }
}
