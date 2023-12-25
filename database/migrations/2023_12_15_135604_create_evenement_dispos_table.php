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
        Schema::create('evenement_dispos', function (Blueprint $table) {
            $table->id();
            $table->string("titre");
            $table->string("event_image");
            $table->string("lieu");
            $table->timestamp("date_debut");
            $table->timestamp("date_fin")->nullable();
            $table->longText("description")->nullable();
            $table->integer("statut")->default(0);
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evenement_dispos');
    }
};
