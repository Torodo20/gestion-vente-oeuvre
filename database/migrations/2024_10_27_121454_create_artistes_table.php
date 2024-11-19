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
        if (!Schema::hasTable('artistes')) {
        Schema::create('artistes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_naissance')->nullable();
            $table->string('lieu_naissance')->nullable();
            $table->string('telephone')->nullable();
            $table->text('description')->nullable();
            $table->text('parcours')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Lien avec l'utilisateur

            $table->timestamps();

             // Clé étrangère et suppression en cascade
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artistes');
    }
};
