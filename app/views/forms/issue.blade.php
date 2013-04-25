@extends('layouts.main')

@section('header')
	@parent
	<small>Create Issue</small>
@stop

@section('content')

	<form method="POST" action="/issue/new">
		<div class="row-fluid">
			<div class="span12">
				<label>What's the issue?</label>
				<input name="summary" class="span12" type="text" placeholder="Enter a quick summary in a few words." required>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span6">
				<label>What's having an issue?</label>
				<select name="project" class="span12">
					@foreach($projects as $project)
					<option value="{{$project->id}}">{{$project->name}}</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span12">
				<label>Please describe the issue further, what the expected results would be (if applicable), and any steps to reproduce.</label>
				<textarea class="span12" name="description" placeholder="Seriously, there's no such thing as 'Too much information'"></textarea>
			</div>
		</div>
		<div class="row-fluid">
			<button class="span4 btn btn-primary btn-large" type="submit">Submit Issue</button>
		</div>
	</form>
@stop
