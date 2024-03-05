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
        Schema::create('reactions_msg', function (Blueprint $table) {
            $table->id('id_reactionMsg');
            $table->unsignedBigInteger('id_pub');
            $table->unsignedBigInteger('id_typeReactionMsg');
            $table->timestamps();

            $table->foreign('id_pub')->references('id_pub')->on('publications')->onDelete('cascade');
            $table->foreign('id_typeReactionMsg')->references('id_typeReactionMsg')->on('type_reactions_msg')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reaction_msgs');
    }
};