<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDanhmucsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('danhmucs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->unique();
			$table->string('alias');
			$table->integer('order');
			$table->integer('parent_id');
			$table->string('keywords');
			$table->string('description');
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
		Schema::drop('danhmucs');
	}

}
