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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
                
            $table->string('designation'); 
            $table->string('marque'); 
            $table->string('reference'); 
            $table->integer('qtestock'); 
            $table->double('prix',8,2); 
            $table->string('imageart'); 
             
            $table->unsignedBigInteger('scategorieID');  
 
            $table->foreign('scategorieID') 
                ->references('id') 
                ->on('scategories') 
                ->onDelete('restrict') 
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
};
