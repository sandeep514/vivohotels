<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactusTable extends Migration {

	public function up()
	{
		Schema::create('contactus', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 100);
			$table->string('email', 256);
			$table->string('mobile', 100);
			$table->text('message');
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('contactus');
	}
}