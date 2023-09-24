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
			<h1 class="mb-5">{{ $title }}</h1>
			<a
				href="/dashboard/posts"
				class="btn btn-success mb-3"
			><span
					class="feather"
					data-feather="arrow-left"
				></span> Back to all categories</a>
			<div class="row">
				@foreach ($posts as $post)
					<div class="col-md-4 mb-3">
						<div class="card">
							<div
								class="position-absolute px-3 py-2 text-white"
								style="background-color: rgba(0, 0, 0, 0.7)"
							><a
									href=#"
									class="text-decoration-none text-white"
								>{{ $category->name }}</a></div>
							<a
								href="/dashboard/posts/{{ $post->slug }}"
								class="text-decoration-none"
							>
								<img
									src="https://source.unsplash.com/500x300/?{{ $category->name }}"
									class="card-img-top"
									alt="{{ $category->name }}"
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
		</div>
	</div>
@endsection
