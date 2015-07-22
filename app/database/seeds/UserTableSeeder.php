<?php
	class UserTableSeeder extends Seeder {

		public function run(){

			DB::table('users')->delete();
			User::create(array(
				'password'		=>Hash::make('scoot'),
				'email'			=>'frg316@lehigh.edu',
				'firstname'		=>'francesco',
				'lastname'		=>'grossi',
				));
		}
	}
?>