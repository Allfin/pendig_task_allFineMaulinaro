{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
	<h1 class="mb-5">Halaman Posts</h1>
	<a
		href="/posts/create"
		class="btn btn-link btn-primary text-decoration-none link-light mb-3"
	>+ Tambah Postingan</a>
	@foreach ($posts as $post)
		<h2><a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a></h2>
		{{ $post['excerpt'] }}
	@endforeach
@endsection
