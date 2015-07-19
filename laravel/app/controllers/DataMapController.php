<?php

class DataMapController extends BaseController{

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