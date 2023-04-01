<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('image');

            $table->unsignedBigInteger('categ_id');
            $table->foreign('categ_id')->references('id')->on('category');
            
            $table->integer('price');


            $table->unsignedBigInteger('magasine_id');
            $table->foreign('magasine_id')->references('id')->on('magasine');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
