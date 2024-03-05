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
        Schema::create('publications', function (Blueprint $table) {
            $table->id('id_pub');
            $table->timestamp('date_pub')->useCurrent();
            $table->string('source_pub');
            $table->boolean('isApproved');
            $table->unsignedBigInteger('nbr_comm');
            $table->unsignedBigInteger('nbr_react');
            $table->unsignedBigInteger('id_contenu');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_contenu')->references('id_contenu')->on('contenus');
            $table->foreign('id_user')->references('id_user')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};