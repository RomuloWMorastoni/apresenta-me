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
        // Schema::create('pessoas', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('nome');
        //     $table->string('documento')->unique();
        //     $table->string('tipo');
        //     $table->string('telefone');
        //     $table->string('email')->unique();
        //     $table->timestamps();
        // });
        
            Schema::table('pessoas', function (Blueprint $table) {
                $table->renameColumn('documento', 'tipo');
                $table->renameColumn('tipo', 'documento');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }
};
