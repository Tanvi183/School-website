<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_bn')->nullable();
            $table->string('title')->nullable();
            $table->string('title_bn')->nullable();
            $table->string('designation')->nullable();
            $table->string('designation_bn')->nullable();
            $table->string('mobile_no_one')->nullable();
            $table->string('mobile_no_two')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('fax_number')->nullable();
            $table->string('employment')->nullable();
            $table->text('short_message')->nullable();
            $table->text('short_message_bn')->nullable();
            $table->text('long_message')->nullable();
            $table->text('long_message_bn')->nullable();
            $table->string('image')->nullable();
            $table->integer('serial_num');
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('messages');
    }
}
