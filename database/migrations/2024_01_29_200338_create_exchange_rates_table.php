<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExchangeRatesTable extends Migration
{
    public function up()
    {
        Schema::create('exchange_rates', function (Blueprint $table) {
            $table->id();
            $table->string('office_name');
            $table->date('publish_date');
            $table->decimal('usd_to_try', 8, 2);
            $table->decimal('try_to_usd', 8, 2);
            $table->decimal('usd_to_syp', 8, 2);
            $table->decimal('syp_to_usd', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('exchange_rates');
    }
};