<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	public function up()
	{
		Schema::create('orders', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('userId');
			$table->integer('hotleId');
			$table->integer('propertyCategoryId');
			$table->string('propertyTypeId');
			$table->string('paymentDetails', 256);
			$table->integer('status')->default('1');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('orders');
	}
}