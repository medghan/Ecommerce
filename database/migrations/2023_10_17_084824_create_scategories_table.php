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
        Schema::create('scategories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nomscategorie'); 
            $table->string('imagescategorie'); 
            $table->unsignedBigInteger('categorieID'); 
            $table->foreign('categorieID') ->references('id') ->on('categories') ->onDelete('restrict') ->onUpdate('restrict'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scategories');
    }
};
