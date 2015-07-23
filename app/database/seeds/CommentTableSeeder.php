<?php

class CommentTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('comments')->delete();

		Comment::create(array(
			'author' => 'Chris Sevilleja',
			'text' => 'Look I am a test comment.',
			'location' => 'New York, US',
			'latitude' => '40.7127 N',
			'longitude' => '74.0059 W'
		));

		Comment::create(array(
			'author' => 'Nick Cerminara',
			'text' => 'This is going to be super crazy.'
			'location' => 'Orlando, US',
			'latitude' => '28.4158 N',
			'longitude' => '81.2989 W'
		));

		Comment::create(array(
			'author' => 'Holly Lloyd',
			'text' => 'I am a master of Laravel and Angular.'
			'location' => 'San Francisco, US'
			'latitude' => '37.7833 N',
			'longitude' => '122.4167 W'
		));
	}

}