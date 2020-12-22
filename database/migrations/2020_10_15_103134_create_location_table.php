<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocationTable extends Migration {

	public function up()
	{
		Schema::create('location', function(Blueprint $table) {
			$table->increments('id');
			$table->string('state', 256);
			$table->string('city', 256);
			$table->integer('status')->default('1');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('location');
	}
}