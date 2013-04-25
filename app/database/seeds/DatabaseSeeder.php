<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('SampleIssueSeeder');
	}

}

class SampleIssueSeeder extends Seeder {

	public function run()
	{
		DB::table('projects')->delete();
		DB::table('issues')->delete();
		DB::table('comments')->delete();

		$project = new Project;
		$project->fill(array(
			'name'	=> 'Test Project Name',
			'description'	=> 'A test project to get started.'
		));
		$project->save();

		$issue = new Issue;
		$issue->fill(array(
			'summary' => "Issue #1",
			'description' => "This is a description of a sample issue.",
			'reporter'	=> 'test@example.com',
			'project_id'	=> $project->id
		));
		$issue->save();

		$comment = new Comment;
		$comment->fill(array(
			'issue_id' => $issue->id,
			'comment' => 'Comment number one :-D',
			'commentor' => 'test@example.com'
		));
		$comment->save();

		$comment = new Comment;
		$comment->fill(array(
			'issue_id' => $issue->id,
			'comment' => 'Comment number two D-:',
			'commentor' => 'test@example.com'
		));
		$comment->save();

		$issue = new Issue;
		$issue->fill(array(
			'summary' => "Issue #2",
			'description' => "This is a description of another sample issue.",
			'reporter'	=> 'test@example.com',
			'project_id'	=> $project->id
		));
		$issue->save();

		$comment = new Comment;
		$comment->fill(array(
			'issue_id' => $issue->id,
			'comment' => 'Comment number one :-D',
			'commentor' => 'test@example.com'
		));
		$comment->save();

		$comment = new Comment;
		$comment->fill(array(
			'issue_id' => $issue->id,
			'comment' => 'Comment number two D-:',
			'commentor' => 'test@example.com'
		));
		$comment->save();

	}
}
