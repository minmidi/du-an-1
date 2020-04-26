<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_settings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo');
            $table->string('phone_number');
            $table->string('email');
            $table->string('hotline');
            $table->string('address');
            $table->text('map_url')->nullable();
            $table->text('youtube_url')->nullable();
            $table->text('facebook_url')->nullable();
            $table->text('backround_img')->nullable();
            $table->text('intro_video_url')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('web_settings');
    }
}
