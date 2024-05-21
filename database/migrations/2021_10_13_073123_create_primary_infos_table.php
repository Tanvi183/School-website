<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrimaryInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('primary_infos', function (Blueprint $table) {
            $table->id();
            $table->string('school_name');
            $table->string('school_name_bn')->nullable();
            $table->string('address')->nullable();
            $table->string('address_bn')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('mobile_no_one')->nullable();
            $table->string('school_code')->nullable();
            $table->text('school_mpo_code')->nullable();
            $table->string('school_eiin_code')->nullable();
            $table->string('fb_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->text('short_description')->nullable();
            $table->text('short_description_bangla')->nullable();
            $table->text('long_description')->nullable();
            $table->text('long_description_bangla')->nullable();
            $table->text('map_embed')->nullable();
            $table->string('top_banner_image')->nullable();
            $table->string('top_banner_image_url')->nullable();
            $table->string('logo');
            $table->string('favicon')->nullable();
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
        Schema::dropIfExists('primary_infos');
    }
}
