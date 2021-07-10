<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{

    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {

            $table->id();
            $table->string('message');
            $table->foreignId('users_id')->constrained();
            $table->foreignId('movies_id')->constrained();
            $table->timestamps();

        });
    }
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
