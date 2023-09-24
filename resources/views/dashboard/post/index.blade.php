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
		<div class="content col-md-10">
			@if (session()->has('success'))
				<div
					class="alert alert-primary"
					role="alert"
				>
					{{ session('success') }}
				</div>
			@endif
			<h3>{{ $title }}</h3>
			<hr>
			<div class="table-responsive small">
				<a
					href="/dashboard/posts/create"
					class="btn btn-primary mb-3"
				>Create new post</a>
				<table class="table-striped table-sm table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Title</th>
							<th scope="col">Category</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($posts as $post)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $post->title }}</td>
								<td>{{ $post->category->name }}</td>
								<td>
									<a
										href="/dashboard/posts/{{ $post->slug }}"
										class="btn bg-info badge"
									>
										<span
											class="feather"
											data-feather="eye"
										>
										</span>
									</a>
									<a
										href=""
										class="btn bg-warning badge"
									>
										<span
											class="feather"
											data-feather="edit"
										>
										</span>
									</a>
									<a
										href=""
										class="btn bg-danger badge"
									>
										<span
											class="feather"
											data-feather="x-circle"
										>
										</span>
									</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection
