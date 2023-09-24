@extends('layouts.main')

@section('container')
	<h1 class="mb-5">{{ $title }}</h1>
	<ul>
		@foreach ($posts as $post)
			<li>
				<h4><a href="/categories/{{ $post->slug }}">{{ $post->name }}</a></h4>
			</li>
		@endforeach
	</ul>
@endsection
