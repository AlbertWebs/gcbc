<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CreateDummyEvent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->dateTime('start');
                $table->dateTime('end');
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
        Schema::dropIfExists('events');
    }
}
