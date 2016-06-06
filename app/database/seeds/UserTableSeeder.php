<?php 
	
class UserTableSeeder extends Seeder 
{
	public function run()
	{	
		DB::table('users')->delete();

		$user = new User();
		$user->username = 'ndnatalie';
		$user->email = 'ndnatalie@gmail.com';
		$user->password = $_ENV['USER_PASSWORD'];
		$user->save();
	}

}
