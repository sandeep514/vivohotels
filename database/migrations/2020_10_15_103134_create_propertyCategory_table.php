<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropertyCategoryTable extends Migration {

	public function up()
	{
		Schema::create('propertyCategory', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 256);
			$table->integer('status')->default('1');
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('propertyCategory');
	}
}