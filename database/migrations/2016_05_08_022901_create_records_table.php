<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('discogs_id')->nullable();
            $table->unsignedInteger('artist_id');
            $table->foreign('artist_id')->references('id')->on('artists');
            $table->unsignedInteger('genre_id');
            $table->foreign('genre_id')->references('id')->on('genres');
            $table->unsignedInteger('label_id');
            $table->foreign('label_id')->references('id')->on('labels');
            $table->string('title');
            $table->unsignedInteger('enabled');
            $table->json('contents');
            $table->timestamp('created_at')->default(Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(Carbon\Carbon::now());
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('records');
    }
}
