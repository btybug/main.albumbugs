<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collections',function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->text('data');
            $table->tinyInteger('active')->default('0');
            $table->string('type')->default('custom');
            $table->tinyInteger('is_default')->default('0');
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
        Schema::dropIfExists('collections');
    }
}
