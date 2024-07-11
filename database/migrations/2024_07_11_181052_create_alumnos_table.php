<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('alumnos', function (Blueprint $table) {
        $table->id(); // Esto define un campo id autoincremental
        $table->string('nombreAl');
        $table->string('curso');
        $table->integer('nota1')->nullable()->default(0);
        $table->integer('nota2')->nullable()->default(0);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
