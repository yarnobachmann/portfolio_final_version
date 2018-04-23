<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectViewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_views', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('section_1', 65535);
			$table->text('section_2', 65535);
			$table->string('side_image');
			$table->string('right_image')->nullable();
			$table->string('link_website')->nullable();
			$table->integer('project_id');
			$table->timestamps();
			$table->string('project_name');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('project_views');
	}

}
