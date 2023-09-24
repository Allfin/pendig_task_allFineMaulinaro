@extends('layouts.main')

@section('container')
	<div class="row justify-content-center">
		<div class="col-md-8">
			<h2>{{ $post['title'] }}</h2>
			<p><a href="/categories/">category</a>/<a href="/categories/{{ $post->category->slug }}">{{ $post->category->slug }}</a>
			</p>

			<img
				src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}"
				class="card-img-top"
				alt="{{ $post->category->name }}"
			>

			<p>{!! $post['body'] !!}</p>
			<a href="/posts">Go Back Post</a>
		</div>
	</div>
@endsection
