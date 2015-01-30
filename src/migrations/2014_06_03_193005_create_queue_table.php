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
        // CREATE TABLE laq_async_queue
        //   (
        //     id                 number(10) NOT NULL,
        //     status             number(11) DEFAULT '0' NOT NULL,
        //     retries            number(11) DEFAULT '0' NOT NULL,
        //     delay              number(11) DEFAULT '0' NOT NULL,
        //     payload            varchar2(4000) DEFAULT '' NOT NULL,
        //     created_at         TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        //     updated_at         TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        //   );
        // CREATE SEQUENCE laq_async_queue_seq;
        Schema::create('laq_async_queue', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status')->default(0);
            $table->integer('retries')->default(0);
            $table->integer('delay')->default(0);
            $table->longText('payload')->nullable();
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
        Schema::drop('laq_async_queue');
    }
}
