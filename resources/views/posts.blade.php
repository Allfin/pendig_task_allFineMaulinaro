@extends('layouts.main')

@section('container')
	<h1 class="mb-5">{{ $title }}</h1>
	<div class="row">
		@foreach ($posts as $post)
			<div class="col-md-4 mb-3">
				<div class="card">
					<div
						class="position-absolute px-3 py-2 text-white"
						style="background-color: rgba(0, 0, 0, 0.7)"
					><a
							href="/categories/{{ $post->category?->slug }}"
							class="text-decoration-none text-white"
						>{{ $post->category?->name }}</a></div>
					<a
						href="/posts/{{ $post->slug }}"
						class="text-decoration-none"
					>
						<img
							src="https://source.unsplash.com/500x300/?{{ $post->category?->name }}"
							class="card-img-top"
							alt="{{ $post->category?->name }}"
						>
					</a>
					<div class="card-body">
						<h5 class="card-title"><a
								href="/posts/{{ $post->slug }}"
								class="text-decoration-none link-dark"
							>{{ $post->title }}</a>
						</h5>
						<p class="card-text">{{ $post->excerpt }}</p>
						<a
							href="/posts/{{ $post->slug }}"
							class="btn btn-primary"
						>Read More</a>
					</div>
				</div>
			</div>
			{{-- <h2><a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a></h2>
      <p>{{ $post['excerpt'] }}</p> --}}
		@endforeach
	</div>
@endsection
