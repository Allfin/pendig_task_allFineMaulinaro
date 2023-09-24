<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
	<div class="{{ $active === 'Dashboard' ? 'container-fluid' : 'container' }}">
		<a
			class="navbar-brand"
			href="/"
		>ALLFine Blog</a>
		<button
			class="navbar-toggler"
			type="button"
			data-bs-toggle="collapse"
			data-bs-target="#navbarNavAltMarkup"
			aria-controls="navbarNavAltMarkup"
			aria-expanded="false"
			aria-label="Toggle navigation"
		>
			<span class="navbar-toggler-icon"></span>
		</button>
		<div
			class="navbar-collapse collapse"
			id="navbarNavAltMarkup"
		>
			<div class="navbar-nav">
				<a
					class="nav-link {{ $active === 'Home' ? 'active' : '' }}"
					href="/"
				>Home</a>
				<a
					class="nav-link {{ $active === 'Post' ? 'active' : '' }}"
					href="/posts"
				>Blog</a>
				<a
					class="nav-link {{ $active === 'Category' ? 'active' : '' }}"
					href="/categories"
				>Category</a>
			</div>
			<div class="navbar-nav ms-auto">
				<a
					class="nav-link {{ $active === 'Dashboard' ? 'active' : '' }}"
					href="/dashboard"
				>Dashboard</a>
			</div>
		</div>
	</div>
</nav>
