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

            Schema::create('reactions_post', function (Blueprint $table) {
                $table->id('id_reactionPost');
                $table->unsignedBigInteger('id_pub');
                $table->unsignedBigInteger('id_typeReactionPost');
                $table->timestamps();

                $table->foreign('id_pub')->references('id_pub')->on('publications')->onDelete('cascade');
                $table->foreign('id_typeReactionPost')->references('id_typeReactionPost')->on('type_reactions_post')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reactions_posts');
    }
};