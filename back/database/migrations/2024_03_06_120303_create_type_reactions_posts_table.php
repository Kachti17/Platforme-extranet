<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeReactionsPostsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('type_reactions_post')) {
            Schema::create('type_reactions_post', function (Blueprint $table) {
                $table->id();
                $table->string('img_reactionPost');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('type_reactions_post');
    }
}