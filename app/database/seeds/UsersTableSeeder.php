<?php

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$now = date('Y-m-d H:i:s');
		
		$users = [
			['username' => 'admin', 'email' => 'administrador@email.com', 'password' => Hash::make('12345678'), 'name' => 'usuario', 'lastname' => 'administrador', 'created_at' => $now, 'updated_at' => $now],
			
		];

		DB::table('users')->insert($users);
	}

} 
