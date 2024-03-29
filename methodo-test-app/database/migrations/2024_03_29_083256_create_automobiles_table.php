<?php

use App\Models\Marque;
use App\Models\Modeles;
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
        Schema::create('automobiles', function (Blueprint $table) {
            $table->id();
            $table -> unsignedBigInteger('marque_id');
            $table -> unsignedBigInteger('modele_id');
            $table->timestamps();
            $table->foreign('marque_id')->references('id')->on('marques');
            $table->foreign('modele_id')->references('id')->on('modeles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('automobiles');
    }
};
