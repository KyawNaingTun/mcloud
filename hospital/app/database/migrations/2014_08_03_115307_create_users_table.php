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
		Schema::create('users', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->text('fullname', 30);
			$table->text('email', 30);
			$table->text('password', 64);
			$table->text('remember_token', 100)->nullable();
			$table->bigInteger('role_id')->unsigned();
			$table->timestamps();
			$table->foreign('role_id')->references('id')->on('role');
               
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('users', function($table) {
                    $table->dropForeign('user_role_id_foreign');
                });


        Schema::drop('users', function( $table ) {
                    
                });
    }

}