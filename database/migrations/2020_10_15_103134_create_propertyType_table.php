<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropertyTypeTable extends Migration {

	public function up()
	{
		Schema::create('propertyType', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 256);
			$table->integer('status')->default('1');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('propertyType');
	}
}