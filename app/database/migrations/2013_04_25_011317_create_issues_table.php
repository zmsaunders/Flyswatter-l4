<?php

use Illuminate\Database\Migrations\Migration;

class CreateIssuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('issues', function($table)
		{
			$table->increments('id');
			$table->integer('project_id');
			$table->foreign('project_id')->references('id')->on('projects');
			$table->text('summary');
			$table->text('description');
			$table->string('status', 100)->default('new');
			$table->string('reporter', 255);
			$table->string('owner', 255)->default('No One');
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
		Schema::drop('issues');
	}

}
