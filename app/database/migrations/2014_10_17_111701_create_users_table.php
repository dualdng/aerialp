<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			if (!Schema::hasTable('users')) {
			Schema::create('users', function($table) {
					$table->increments('id');
					$table->Integer('post_id');
					$table->string('title',100);
					$table->text('content');
					$table->string('excerpt',100)->nullable();
					$table->tinyInteger('category');
					$table->tinyInteger('type');
					$table->tinyInteger('hidden')->default(0);
					$table->time('create_time');
			});
			}
			else {
					Schema::rename('users','article');
			}

		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
