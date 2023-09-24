@dd($post)

@extends('layouts.main')

@section('container')
	<h1 class="mb-5">Halaman Post</h1>
	<h2><a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a></h2>
	<p>{!! $post['body'] !!}</p>
	<a href="/posts">Go Back Post</a>
@endsection
