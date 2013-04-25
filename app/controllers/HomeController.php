<?php

class HomeController extends BaseController {

	public function getIndex()
	{
		$view_data = array(
			'title'	=> 'Dashboard',
			'projects' => Project::all()
		);

		// var_dump(Comment::all());

		return View::make('dashboard.start')->with($view_data);
	}

}
