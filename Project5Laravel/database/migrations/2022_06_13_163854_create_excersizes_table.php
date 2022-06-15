<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('excersizes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments("id")->unsigned(false);
            $table->string('Name');
            $table->string('Description');
            $table->binary('Image');
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
        Schema::dropIfExists('excersizes');
    }
};
