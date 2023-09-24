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
		<div class="col-lg-8">
			<h2>Create New Post</h2>
			<hr>
			<form
				method="post"
				action="/dashboard/posts"
			>
				@csrf
				<div class="mb-3">
					<label
						for="title"
						class="form-label"
					>Title</label>
					<input
						type="title"
						class="form-control @error('title')is-invalid @enderror"
						name="title"
						id="title"
						autofocus
					>
					@error('title')
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
						disabled
					>
				</div>
				<div class="mb-3">
					<select
						class="form-select"
						aria-label="Default select example"
						name="category_id"
					>
						<option selected>Select Category</option>
						@foreach ($categories as $category)
							@if (old('category_id') == $category->id)
								<option
									value="{{ $category->id }}"
									selected
								>{{ $category->name }}</option>
							@else
								<option value="{{ $category->id }}">{{ $category->name }}</option>
							@endif
						@endforeach
					</select>
				</div>
				<div class="mb-3">
					<label
						for="body"
						class="form-label"
					>Body</label>
					<input
						type="hidden"
						id="body"
						name="body"
					>
					<trix-editor input="body"></trix-editor>
					@error('body')
						<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<button
					type="submit"
					class="btn btn-primary"
				>Submit</button>
			</form>
		</div>
	</div>

	<script>
		const title = document.querySelector('#title')
		const slug = document.querySelector('#slug')

		title.addEventListener('change', function() {
			fetch('/dashboard/posts/checkSlug?title=' + title.value)
				.then(response => response.json())
				.then(data => slug.value = data.slug)
		});

		document.addEventListener('trix-file-accept', function(event) {
			event.preventDefault()
		})
	</script>
@endsection
