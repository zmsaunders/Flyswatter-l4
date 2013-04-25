<?php

class IssueController extends BaseController {

	/**
	 * View Issue
	 */
	public function getView($id)
	{
		$issue = Issue::find($id);

		if( ! $issue )
			app::abort(404);

		$view_data = array(
			'title' => $issue->summary,
			'issue' => $issue,
			'comments' => $issue->comments
		);

		return View::make('issue.view')->with($view_data);
	}

	/**
	 * Modify Issue
	 */
	public function putView($id)
	{

	}

	/**
	 * Delete Issue
	 */
	public function deleteView($id)
	{

	}

	/**
	 * Display New Issue form
	 */
	public function getNew()
	{
		$view_data = array(
			'title'		=> 'Create Issue'
		);

		return View::make('forms.issue')->with($view_data);
	}

	/**
	 * Add new issue
	 */
	public function postNew()
	{
		$rules = array(
			'summary'		=> 'required',
			'project'		=> 'required',
			'description'	=> 'required',
		);

		// Validate
		$validation = Validator::make(Input::all(), $rules);

		if ( $validation->fails() )
		{
			return Redirect::action('IssueController@new')->with_errors($validation);
		}

		else
		{
			$issue = new Issue;

			// Store Issue
			$issue->summary 	= Input::get('summary');
			$issue->description = Input::get('description');
			$issue->reporter 	= 'test@example.com';
			$issue->project_id	= Input::get('project');

			$issue->save();

			return Redirect::action('IssueController@getView', array($issue->id));
		}
	}
}
