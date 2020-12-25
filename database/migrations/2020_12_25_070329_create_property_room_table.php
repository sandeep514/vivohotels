<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreatePropertyRoomTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('property_room', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('property_id');
                $table->string('title');
                $table->integer('no_of_double_bedrooms');
                $table->integer('no_of_single_beds');
                $table->unsignedBigInteger('property_room_amenities_id')
                    ->comment('id for property_room_amenities table');
                $table->float('room_regular_price');
                $table->float('room_offer_price');
                $table->text('room_about_property');
                $table->integer('room_availability')
                    ->default(1)
                    ->comment('1 for enable and 0 for disable');
                $table->timestamps();
            });


            // Migration for propertyRoomAmenities Table

            Schema::create('property_room_amenities', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('property_room_id');
                $table->unsignedBigInteger('amenities_id');
                $table->timestamps();

                $table->foreign('property_room_id')
                    ->references('id')
                    ->on('property_room')
                    ->onDelete('cascade');

                $table->foreign('amenities_id')
                    ->references('id')
                    ->on('amenities')
                    ->onDelete('cascade');
            });

        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('property_room');
        }
    }
