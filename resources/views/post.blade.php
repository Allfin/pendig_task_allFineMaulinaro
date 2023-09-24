@extends('layouts.main')

@section('container')
	<h1 class="mb-5">Halaman Post</h1>
	<h2><a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a></h2>
	<p><a href="/categories/">category</a>/<a href="/categories/{{ $post->category->slug }}">{{ $post->category->slug }}</a>
	</p>
	<p>{!! $post['body'] !!}</p>
	<a href="/posts">Go Back Post</a>
@endsection
