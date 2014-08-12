<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('post', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->text('title');
			$table->text('content');
			$table->bigInteger('user_id')->unsigned();
			$table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('post', function($table) {
                    $table->dropForeign('post_user_id_foreign');
                });


        Schema::drop('post', function( $table ) {
                    
                });
	}

}