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
                $table->id('id');
                $table->unsignedBigInteger('pub_id');
                $table->unsignedBigInteger('typeReactionPost_id');
                $table->timestamps();

                $table->foreign('pub_id')->references('id')->on('publications')->onDelete('cascade');
                $table->foreignId('user_id')->constrained('users');
                $table->foreign('typeReactionPost_id')->references('id')->on('type_reactions_post')->onDelete('cascade');
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