<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToEventEnrollsTable extends Migration
{
    public function up()
    {
        Schema::table('event_enrolls', function (Blueprint $table) {
            $table->unsignedInteger('event_id');
            $table->foreign('event_id', 'event_fk_2379772')->references('id')->on('event_controls');
            $table->unsignedInteger('username_id');
            $table->foreign('username_id', 'username_fk_2379773')->references('id')->on('users');
        });
    }
}
