<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropertyTable extends Migration {

	public function up()
	{
		Schema::create('property', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 256);
			$table->text('description');
			$table->text('address');
			$table->string('mobile', 256);
			$table->string('email', 256);
			$table->string('propertyType', 100);
			$table->string('propertyRaiting', 100);
			$table->string('propertyCategory', 100);
			$table->integer('regular_price');
			$table->integer('offer_price');
			$table->string('propertyImage', 256);
			$table->text('otherImages');
			$table->string('timmingFrom', 11);
			$table->string('timmingTo', 11);
			$table->integer('availability');
			$table->string('status', 11)->default('1');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('property');
	}
}