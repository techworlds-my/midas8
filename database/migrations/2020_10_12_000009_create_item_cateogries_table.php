<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemCateogriesTable extends Migration
{
    public function up()
    {
        Schema::create('item_cateogries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->boolean('in_enable')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
