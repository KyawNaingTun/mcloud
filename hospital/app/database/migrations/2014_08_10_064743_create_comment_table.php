<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comment', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->text('comment');
			$table->bigInteger('user_id')->unsigned();
			$table->bigInteger('post_id')->unsigned();
			$table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('post_id')->references('id')->on('post');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		
		Schema::table('comment', function($table) {
                    $table->dropForeign('comment_user_id_foreign');
                    $table->dropForeign('comment_post_id_foreign');
                });


        Schema::drop('comment', function( $table ) {
                    
                });
	}

}
