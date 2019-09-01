<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteNameFromUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //Delete name from users table
            //Add first name, last name, rawpass, phone, address1, address2, country, state, zip, approved to the table
            $table->dropColumn('name');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('rawpass');
            $table->string('phone');
            $table->string('address1');
            $table->string('address2');
            $table->string('country');
            $table->string('state');
            $table->string('zip');
            $table->boolean('approved');
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
            //
        });
    }
}
