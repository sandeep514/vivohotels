<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqFillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq_fill', function (Blueprint $table) {
            $table->id();
            $table->string('faq');
            $table->text('answer');
            $table->integer('property_id')->index();
            $table->integer('status')->default(1)->comment('1 for enable and 0 for disable');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faq_fill');
    }
}
