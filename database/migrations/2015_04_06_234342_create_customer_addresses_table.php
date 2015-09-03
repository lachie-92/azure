<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer_addresses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('type');
			$table->string('description', 1000);
            $table->string('postcode');
            $table->string('state');
            $table->string('suburb');
			$table->string('street');
			$table->string('city');
			$table->string('address');
			$table->string('country');
            $table->string('territory');
            $table->string('longitude');
            $table->string('latitude');
            $table->boolean('valid_for_geocoding');
            $table->string('geocoded_address');
			$table->timestamps();
			$table->softDeletes();

			$table->integer('customer_id')->unsigned();
			$table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customer_addresses');
	}

}