<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;

    class CreatePropertyTable extends Migration
    {

        public function up()
        {
            Schema::create('property', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->string('location');
                $table->integer('city');
                $table->integer('no_of_bedrooms');
                $table->integer('no_of_double_beds');
                $table->integer('no_of_single_beds');
                $table->integer('max_guests');
                $table->integer('min_guests');
                $table->integer('min_might_stay');
                $table->string('other_person_price');
                $table->text('about_property');
                $table->text('before_buy');
                $table->text('about_meal');
                $table->text('question');
                $table->text('description');
                $table->text('address');
                $table->text('mobile');
                $table->integer('propertyType');
                $table->integer('propertyRating');
                $table->integer('propertyCategory');
                $table->double('regular_price');
                $table->double('offer_price');
                $table->text('propertyImage');
                $table->text('otherImages');
                $table->string('timmingFrom');
                $table->string('timmingTo');
                $table->integer('availability')->default(0);
                $table->integer('availableRooms');
                $table->text('cancellation_pdf');
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
