<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTypesTable extends Migration
{
    public function up()
    {
        Schema::create('order_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('in_enable');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
