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
            $table->id('id');
            $table->unsignedBigInteger('pub_id');
            $table->unsignedBigInteger('typeReactionMsg_id');
            $table->timestamps();

            $table->foreign('pub_id')->references('pub_id')->on('publications')->onDelete('cascade');
            $table->foreign('typeReactionMsg_id')->references('typeReactionMsg_id')->on('type_reactions_msg')->onDelete('cascade');
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