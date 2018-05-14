<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DriveFoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drive_folders',function (Blueprint $table){
            $table->increments('id');
            $table->string('name')->index();
            $table->string('prefix')->nullable();
            $table->string('uploader_slug')->nullable();
            $table->unsignedInteger('parent_id');
            $table->timestamps();

            $table->foreign('parent_id')->references('id')
                ->on('drive_folders')->onDelete('CASCADE');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drive_folders');
    }
}
