<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQueueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laq_async_queue', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('status')->default(0);
            $table->integer('retries')->default(0);
            $table->integer('delay')->default(0);
            $table->longText('payload')->nullable();
            $table->timestamps();
        });

        DB::statement('CREATE SEQUENCE laq_async_queue_seq');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('laq_async_queue');
        DB::statement('DROP SEQUENCE laq_async_queue_seq');
    }
}
