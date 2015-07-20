<?php

class CommentController extends \BaseController {

	/**
	 * Send back all comments as JSON
	 *
	 * @return Response
	 */
	public function index()
	{
		return Response::json(Comment::get());
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$location = Location::get('72.88.232.162')->countryCode;
		$imgPath = basename(Input::get('image'));
		Comment::create(array(
			'author' => Session::get('email'),
			'text' => Input::get('text'),
			'image' => $imgPath,
			'location' => $location
			
		));

		return Response::json(array('success' => true));
	}

	/**
	 * Return the specified resource using JSON
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Response::json(Comment::find($id));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Comment::destroy($id);

		return Response::json(array('success' => true));
	}
	public function getPath(){
		$file = array('image' => Input::get('image'));
		$rules = array('image' => 'required');
		$validator = Validator::make($file, $rules);
		if($validator->fails()){
			return null;
		}
		else{
				$destinationPath = 'uploads';
				$extension = Input::get('image')->getClientOriginalExtension();
				$fileName = rand(11111, 99999).'.'.$extension;
				Input::get('image')->move($destinationPath, $fileName);
				Session::flash('success', 'Upload successful');
				return $destinationPath.'/'.$fileName;
		}
	}
}