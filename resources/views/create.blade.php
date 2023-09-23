@extends('layouts.main')

@section('container')
	<h1>Halaman Create</h1>
	<div class="row">
		<div class="col-6">
			<form
				action="/posts/create"
				method="POST"
			>
				@csrf
				<div class="mb-3">
					<label
						for="titleFormControl"
						class="form-label"
					>Title</label>
					<input
						type="text"
						class="form-control"
						name="title"
						placeholder="Masukan Title yang diinginkan"
						required
					>
				</div>
				<div class="mb-3">
					<label
						for="articleFormControl"
						class="form-label"
					>Isi Artikel</label>
					<textarea
					 type="text"
					 class="form-control"
					 name="body"
					 placeholder="Masukan isi artikel yang diinginkan"
					 style="height: 100px"
					 required
					></textarea>
				</div>
				<button
					class="btn btn-primary w-100 py-2"
					type="submit"
				>Submit</button>
			</form>
		</div>
	</div>
@endsection
