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
        Schema::create('griferias', function (Blueprint $table) {
           
            $table->string('codigo');
            $table->text('articulo');
            $table->string('marca');
            $table->string('stock_total');
            $table->string('almacen_talar');
            $table->string('almacen_outlet');
            $table->string('almacen_quilmes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('griferias');
    }
};
