<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->integer('phone_1')->nullable();
            $table->integer('phone_2')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('whatsapp_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('address')->nullable();
            $table->string('address_link')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
