<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentTable extends Migration {

	public function up()
	{
		Schema::create('payment', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('userId');
			$table->string('tId', 256);
			$table->integer('orderId');
		});
	}

	public function down()
	{
		Schema::drop('payment');
	}
}