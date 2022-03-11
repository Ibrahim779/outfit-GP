<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutfitClothesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outfit_clothes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('outfit_id')->constrained('outfits');
            $table->foreignId('clothe_id')->constrained('clothes');
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
        Schema::dropIfExists('outfit_clothes');
    }
}
