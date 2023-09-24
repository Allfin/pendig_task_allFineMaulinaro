@extends('layouts.main')

@section('container')
	<div class="d-flex justify-content-between flex-md-nowrap align-items-center border-bottom mb-3 flex-wrap pb-2 pt-3">
		<h1 class="h2">Create New Post</h1>
	</div>

	<div class="col-lg-8">
		<form
			method="post"
			accept="/posts/create"
		>
			@csrf
			<div class="mb-3">
				<label
					for="title"
					class="form-label"
				>Title</label>
				<input
					type="title"
					class="form-control"
					name="title"
					id="title"
				>
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
			</div>
			<button
				type="submit"
				class="btn btn-primary"
			>Submit</button>
		</form>
	</div>

	<script>
		const title = document.querySelector('#title')
		const slug = document.querySelector('#slug')

		title.addEventListener('change', function() {
			fetch('/posts/checkSlug?title=' + title.value)
				.then(response => response.json())
				.then(data => slug.value = data.slug)
		});

		document.addEventListener('trix-file-accept', function(event) {
			event.preventDefault()
		})
	</script>
@endsection
