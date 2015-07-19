<?php

class DataMapController extends BaseController{

	public function index() {
		return View::make('datamap');
	}

	/**
	 * Render the world map page
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('datamap');
	}
}