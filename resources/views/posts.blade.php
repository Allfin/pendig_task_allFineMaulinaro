{{-- @dd($post) --}}

@extends('layouts.main')

@section('container')
	<h1 class="mb-5">Halaman Posts</h1>
	@foreach ($posts as $post)
		<h2><a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a></h2>
		<p>{{ $post['body'] }}</p>
	@endforeach
@endsection
