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
			<h3>{{ $title }}</h3>
			<hr>
			<table class="table-striped table-sm table">
				<a
					href="/dashboard/category/create"
					class="btn btn-primary mb-3"
				>Create new category</a>
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Category</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($categories as $category)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $category->name }}</td>
							<td>
								<a
									href="/dashboard/category/{{ $category->slug }}"
									class="btn bg-info badge"
								>
									<span
										class="feather"
										data-feather="eye"
									>
									</span>
								</a>
								<a
									href="/dashboard/category/{{ $category->slug }}/edit"
									class="btn bg-warning badge"
								>
									<span
										class="feather"
										data-feather="edit"
									>
									</span>
								</a>
								<form
									action="/dashboard/category/{{ $category->slug }}"
									method="post"
									class="d-inline"
								>
									@method('delete')
									@csrf

									<button
										class="badge bg-danger border-0"
										onclick="return confirm('Are you sure ?')"
									><span
											class="feather"
											data-feather="x-circle"
										>
										</span></button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection
