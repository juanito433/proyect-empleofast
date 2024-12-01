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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_jobs');
            $table->unsignedBigInteger('id_candidate');
            $table->date('publication_date');
            $table->string('status')->default('Pendiente'); ;
            $table->timestamps();


            // Relaciones
            $table->foreign('id_jobs')->references('id')->on('jobs')->onDelete('cascade');
            $table->foreign('id_candidate')->references('id')->on('candidates')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
