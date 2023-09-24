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
			<h2>Create New Category</h2>
			<hr>
			<form
				action="/dashboard/category/"
				method="post"
			>
				@csrf
				<div class="row">
					<div class="col-md-4 mb-3">
						<div class="mb-3">
							<label
								for="name"
								class="form-label"
							>Name</label>
							<input
								type="name"
								class="form-control @error('name')is-invalid @enderror"
								name="name"
								id="name"
								value="{{ old('name') }}"
								autofocus
							>
							@error('name')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
							@enderror
						</div>

						<div class="mb-3">
							<label
								for="slug"
								class="form-label"
							>Slug</label>
							<input
								type="slug"
								class="form-control"
								name="slug"
								id="slug"
								readonly
								value="{{ old('slug') }}"
							>
						</div>
					</div>
				</div>
				<button
					type="submit"
					class="btn btn-primary"
				>Update Category</button>
			</form>
		</div>
	</div>

	<script>
		const name = document.querySelector('#name')
		const slug = document.querySelector('#slug')

		name.addEventListener('change', function() {
			fetch('/dashboard/category/checkSlug?name=' + name.value)
				.then(response => response.json())
				.then(data => slug.value = data.slug)
		});
	</script>
@endsection
