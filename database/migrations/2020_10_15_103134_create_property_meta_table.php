<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropertyMetaTable extends Migration {

	public function up()
	{
		Schema::create('property_meta', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('key', 256);
			$table->string('value', 256);
			$table->integer('status')->default('1');
		});
	}

	public function down()
	{
		Schema::drop('propertyMeta');
	}
}
