<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->id();
            $table->string('name', 256);
            $table->string('email', 256);
            $table->string('mobile', 100)->nullable();
            $table->string('password', 256);
            $table->bigInteger('role_id')->unsigned();
            $table->integer('status')->default(0)->comment('status 1 for active and 0 for deactivated');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('user');
	}
}
