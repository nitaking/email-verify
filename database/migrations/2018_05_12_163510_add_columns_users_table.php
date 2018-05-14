<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->string('name_pronunciation');
          $table->integer('birth_year');
          $table->integer('birth_month');
          $table->integer('birth_day');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->drop('name_pronunciation');
          $table->drop('birth_year');
          $table->drop('birth_month');
          $table->drop('birth_day');
        });
    }
}
