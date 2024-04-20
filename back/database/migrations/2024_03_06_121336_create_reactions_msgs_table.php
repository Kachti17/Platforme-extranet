<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReactionsMsgsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('reactions_msg')) {
            Schema::create('reactions_msg', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('pub_id');
                $table->unsignedBigInteger('typeReactionMsg_id');
                $table->timestamps();

                $table->foreign('pub_id')->references('id')->on('publications')->onDelete('cascade');
                $table->foreignId('user_id')->constrained('users');
                $table->foreign('typeReactionMsg_id')->references('id')->on('type_reactions_msg')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('reactions_msg');
    }
}