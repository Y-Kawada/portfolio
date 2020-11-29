<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AlterUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique('users_email_unique');
          });
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn("email");
            $table->dropColumn("email_verified_at");
            $table->string("username", 255)->nullable(false)->after("id");
            $table->unique('username');
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
            $table->dropUnique('username');
          });
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn("username");
            $table->string("email", 255)->nullable(false)->after("id");
            $table->string("email_verified_at", 255)->nullable()->default("null")->after("email");
            $table->unique('email');
          });
    }
}
