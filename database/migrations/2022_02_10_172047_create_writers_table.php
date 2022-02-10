<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWritersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('writers', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['active','block','waiting_confirmation','']);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('email_confirm')->nullable();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('telegram_id')->nullable();
            $table->integer('telegram_number_id')->nullable();
            $table->string('telegram_confirm')->nullable();
            $table->integer('confirmation_manager_id')->nullable();
            $table->integer('score')->default(100);
            $table->timestamp('starterd_at')->nullable();
            $table->timestamp('latest_activists_at')->nullable();
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
        Schema::dropIfExists('writers');
    }
}
