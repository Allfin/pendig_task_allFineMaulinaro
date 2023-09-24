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
						href="/dashboard/post"
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
			asd
		</div>
	</div>
@endsection
