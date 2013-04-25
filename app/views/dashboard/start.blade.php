@extends('layouts.main')

@section('header')
	@parent
	<small>Dashboard</small>
@stop

@section('nav')
	@parent
@stop

@section('content')
	@if (count($projects) > 0)
		@foreach($projects as $project)
			<h3>{{$project->name}}</h3>
			<div class="well">
			@foreach($project->issues()->take(5)->get() as $issue)
				<h5><a href="/issue/view/{{$issue->id}}">{{ $issue->summary }}</a></h5>
				<p class="muted"><small>Comments: {{$issue->comments()->count()}}  | Reported by: {{$issue->reporter}} | Assigned to: {{ $issue->owner }}</small></p>
				<hr />
			@endforeach
			</div>
		@endforeach
	@else
		<p>No Issues :-(</p>
	@endif
@stop
