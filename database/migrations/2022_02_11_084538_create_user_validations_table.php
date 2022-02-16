<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserValidationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_validations', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string("tabele_name");
            $table->string("token");
            $table->timestamp('ended_at')->default( Carbon::now()->addDays(10) );
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
        Schema::dropIfExists('user_validations');
    }
}
