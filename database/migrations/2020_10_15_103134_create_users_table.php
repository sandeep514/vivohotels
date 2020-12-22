<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('user', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name', 256);
			$table->string('email', 256);
			$table->string('mobile', 100);
			$table->string('password', 256);
			$table->integer('status')->default('1');
		});
	}

	public function down()
	{
		Schema::drop('user');
	}
}