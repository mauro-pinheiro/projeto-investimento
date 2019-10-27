<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUsersTable.
 */
class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			
			//dados de pessoa
			$table->char('cpf', 11)->unique()->nullable();
			$table->string('name', 50);
			$table->char('phone', 11);
			$table->date('birth')->nullable();
			$table->char('gender', 1)->nullable();
			/**
			 * Acessivel somente para os adiministradores
			 * Notas que os administradores deixam sobre um
			 * usuario para outros administradores
			 */
			$table->text('notes')->nullable();
			
			//dados de autenticão
			$table->string('email',80)->unique();

			//Nullable por causa do login por redes sociais
			$table->string('password',254)->nullable();

			//dados de permisão
			$table->string('status')->default('active');
			$table->string('permission')->default('app.user');

			$table->rememberToken();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table){

		});
		Schema::drop('users');
	}
}
