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
		Comment::create(array(
			'author' => Session::get('email'),
			'text' => Input::get('text'),
			'image' => Input::get('image')
			
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

	public function upload(){
		$file = array('image' => Input::file('image'));
		$rules = array('image' => 'required');
		$validator = Validator::make($file, $rules);

		if($validator->fails()){
			return Redirect::to('index')->withInput()->withErrors($validator);
		}
		else{
			if(Input::file('image')->isValid()){
				$destinationPath = 'uploads';
				$extension = Input::file('image')->getClientOriginalExtension();
				$fileName = rand(11111, 99999).'.'.$extension;
				Input::file('image')->move($destinationPath, $fileName);
				Session::flash('success', 'Upload successful');
				return Redirect::to('index');
			}
			else{
				Session::flash('error', 'not uploaded successfully');
				return Redirect::to('index');
			}
		}
	}
}