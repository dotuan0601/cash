<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->timestamp('scheduled_at')->nullable();
            $table->text('phone')->nullable();
            $table->text('coupon')->nullable();
            $table->text('price')->nullable();
            $table->text('salon_name')->nullable();
            $table->integer('salon_id')->nullable();
            $table->integer('service_id')->nullable();
            $table->text('service_name')->nullable();
            $table->integer('status')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
