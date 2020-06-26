<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChannelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('channels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('timezone')->nullable();
            $table->string('theme')->nullable();
            $table->string('hostname')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->text('home_page_content')->nullable();
            $table->text('footer_content')->nullable();
            $table->integer('default_locale_id')->unsigned();
            $table->integer('base_currency_id')->unsigned();
            $table->foreign('default_locale_id')->references('id')->on('locales')->onDelete('cascade');
            $table->foreign('base_currency_id')->references('id')->on('currencies')->onDelete('cascade');
            $table->timestamps();
            $table->string('style_background')->nullable();
            $table->string('style_color')->nullable();
            $table->string('style_primary_color')->nullable();
            $table->string('style_secondary_color')->nullable();
            $table->string('style_social_media')->nullable();
            $table->string('style_footer_background')->nullable();
            $table->string('style_footer_color')->nullable();
            $table->string('style_footer_menu_color')->nullable();
            $table->string('style_methods_background')->nullable();
        });

        Schema::create('channel_locales', function (Blueprint $table) {
            $table->integer('channel_id')->unsigned();
            $table->integer('locale_id')->unsigned();
            $table->primary(['channel_id', 'locale_id']);
            $table->foreign('channel_id')->references('id')->on('channels')->onDelete('cascade');
            $table->foreign('locale_id')->references('id')->on('locales')->onDelete('cascade');
        });

        Schema::create('channel_currencies', function (Blueprint $table) {
            $table->integer('channel_id')->unsigned();
            $table->integer('currency_id')->unsigned();
            $table->primary(['channel_id', 'currency_id']);
            $table->foreign('channel_id')->references('id')->on('channels')->onDelete('cascade');
            $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('channel_currencies');

        Schema::dropIfExists('channel_locales');

        Schema::dropIfExists('channels');
    }
}