<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantSubCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('merchant_sub_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sub_category');
            $table->boolean('in_enable')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
