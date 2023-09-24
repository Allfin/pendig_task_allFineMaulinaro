<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta
		name="viewport"
		content="width=device-width, initial-scale=1"
	>

	<!-- Bootstrap CSS -->
	<link
		href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
		rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
		crossorigin="anonymous"
	>

	{{-- Trix editor --}}
	<link
		rel="stylesheet"
		href="/css/trix.css"
	>
	<script
		type="text/javascript"
		src="/js/trix.js"
	></script>

	<style>
		trix-toolbar [data-trix-button-group="file-tools"] {
			display: none;
		}
	</style>

	<title>ALLFine Blog | {{ $title }}</title>
</head>

<body>

	@include('partials.navbar')

	<div class="container my-4">
		@yield('container')
	</div>

	{{-- Bootstap JS --}}
	<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
		crossorigin="anonymous"
	></script>
</body>

</html>
