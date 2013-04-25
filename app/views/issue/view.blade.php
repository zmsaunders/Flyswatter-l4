@extends('layouts.main')

@section('header')
	@parent
	<small>View Issue</small>
@stop

@section('content')
	<h3>{{ $issue->summary }}</h3>
	<div class="well">
		{{ $issue->description }}
	</div>
	<h4>Comments</h4>
	@if (count($comments) > 0)
		@foreach($comments as $comment)
			<p>{{$comment->comment}} <small class="muted"> - By {{$comment->commentor}} at {{$comment->created_at}}</small></p>
			<hr />
		@endforeach
	@else
		<p>No comments found!</p>
	@endif
@endsection
