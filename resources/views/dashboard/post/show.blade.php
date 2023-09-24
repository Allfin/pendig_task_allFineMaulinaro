@extends('layouts.main')

@section('container')
	<div class="row">
		<div class="sidebar col-md-2">
			<ul class="nav flex-column">
				<li class="nav-item">
					<a
						class="nav-link {{ $navActive === 'Dashboard' ? 'link-primary' : 'link-dark' }}"
						aria-current="page"
						href="/dashboard"
					>Dashboard</a>
				</li>
				<li class="nav-item">
					<a
						class="nav-link {{ $navActive === 'Post' ? 'link-primary' : 'link-dark' }}"
						href="/dashboard/posts"
					>Post</a>
				</li>
				<li class="nav-item">
					<a
						class="nav-link {{ $navActive === 'Category' ? 'link-primary' : 'link-dark' }}"
						href="/dashboard/category"
					>Category</a>
				</li>
			</ul>
		</div>

		<div class="col-md-10">
			<h2>{{ $post['title'] }}</h2>
			<div class="mb-2">
				<a
					href="/dashboard/posts"
					class="btn btn-success"
				><span
						class="feather"
						data-feather="arrow-left"
					></span> Back to all posts</a>
				<a
					href="/dashboard/posts/{{ $post->slug }}/edit"
					class="btn btn-warning"
				><span
						class="feather"
						data-feather="edit"
					></span> Edit</a>

				<form
					action="/dashboard/posts/{{ $post->slug }}"
					method="post"
					class="d-inline"
				>
					@method('delete')
					@csrf

					<button
						class="btn btn-danger border-0"
						onclick="return confirm('Are you sure ?')"
					><span
							class="feather"
							data-feather="x-circle"
						>
						</span> Delete</button>
				</form>
			</div>

			<img
				src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}"
				class="card-img-top"
				alt="{{ $post->category->name }}"
			>

			<p>{!! $post['body'] !!}</p>
		</div>
	@endsection
