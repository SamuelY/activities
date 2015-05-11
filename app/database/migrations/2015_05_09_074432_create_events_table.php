<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('besides', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('event_name');
            $table->text('event_introduce');
			$table->integer('browse');
			$table->integer('bookmark');
			$table->string('organization');
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
		Schema::drop('besides');
	}

}
