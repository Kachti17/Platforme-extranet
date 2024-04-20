<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReactionsPostsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('reactions_post')) {
            Schema::create('reactions_post', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('pub_id');
                $table->unsignedBigInteger('typeReactionPost_id');
                $table->timestamps();
                $table->foreign('pub_id')->references('id')->on('publications')->onDelete('cascade');
                $table->foreignId('user_id')->constrained('users');
                $table->foreign('typeReactionPost_id')->references('id')->on('type_reactions_post')->onDelete('cascade');
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('reactions_post');
    }
}
