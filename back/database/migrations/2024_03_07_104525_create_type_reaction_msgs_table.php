<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeReactionMsgsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('type_reactions_msg')) {
            Schema::create('type_reactions_msg', function (Blueprint $table) {
                $table->id();
                $table->string('img_reactionMsg');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('type_reactions_msg');
    }
}
