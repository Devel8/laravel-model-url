<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Config;

class CreateModelUrlTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Config::get('model-url.table_name'), function (Blueprint $table) {
            $table->increments('id');
            $table->string(Config::get('model-url.prefix').'_type');
            $table->integer(Config::get('model-url.prefix').'_id');
            $table->boolean('active')->default(true);
            $table->string('url');
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
        Schema::drop(Config::get('model-url.table_name'));
    }
}
