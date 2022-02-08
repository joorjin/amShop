<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->integer('writer_id');
            $table->enum('status', ['display','timed','waiting_confirmation','failed','request','edit','delete']);
            $table->string('title');
            $table->string('description');
            $table->string('text');
            $table->string('small_image');
            $table->string('main_image');
            $table->timestamp('starterd_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
