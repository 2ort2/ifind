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
        Schema::create('message_visiteurs', function (Blueprint $table) {
            $table->id();
            $table->string("nom_visiteur");
            $table->string("email_visiteur");
            $table->string("objet")->nullable();
            $table->string("telephone")->nullable();
            $table->string("contenu");
            $table->integer("statut")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('message_visiteurs');
    }
};
