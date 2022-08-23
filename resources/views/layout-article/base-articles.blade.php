<!DOCTYPE html>
<html lang="en-US">
@include('layout-article.head-articles')

<body>

<!-- preloader -->
<div id="preloader">
    <div class="book">
		<div class="inner">
			<div class="left"></div>
			<div class="middle"></div>
			<div class="right"></div>
		</div>
		<ul>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</div>

<!-- site wrapper -->
<div class="site-wrapper">

	<div class="main-overlay"></div>

	<!-- header -->
	<header class="header-classic">

			<div class="container-xl">
				<!-- header top -->
				<div class="header-top">
					<div class="row align-items-center">

						<div class="col-md-4 col-xs-12">
							<!-- site logo -->
							<a class="navbar-brand" href="#">My Apps</a>
						</div>
					</div>
				</div>
			</div>

			<nav class="navbar navbar-expand-lg">
				<!-- header bottom -->
				<div class="header-bottom  w-100">

					<div class="container-xl">
						<div class="d-flex align-items-center">
							<div class="collapse navbar-collapse flex-grow-1">
								<!-- menus -->
								<ul class="navbar-nav">
									<li class="nav-item">
										<a class="nav-link" href="#">Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Lifestyle</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Inspiration</a>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#">Categories</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="#">Category name</a></li>
											<li><a class="dropdown-item" href="#">Category name</a></li>
											<li><a class="dropdown-item" href="#">Category name</a></li>
											<li><a class="dropdown-item" href="#">About</a></li>
										</ul>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="contact.html">Contact</a>
									</li>
								</ul>
							</div>

							<!-- header buttons -->
							<div class="header-buttons">
								<button class="search icon-button">
									<i class="icon-magnifier"></i>
								</button>
								<button class="burger-menu icon-button ms-2 float-end float-lg-none">
									<span class="burger-icon"></span>
								</button>
							</div>
						</div>
					</div>

				</div>
			</nav>

	</header>


    <section class="hero-carousel">
        <div class="container-xl">
            <div class="post-carousel-lg">
                <!-- post -->
                <div class="post featured-post-xl">
                    <div class="details clearfix">
                        <a href="category.html" class="category-badge lg">Lifestyle</a>
                        <h4 class="post-title"><a href="blog-single.html">9 Most Awesome Blue Lake With Snow Mountain</a></h4>
                        <ul class="meta list-inline mb-0">
                            <li class="list-inline-item"><a href="#">Katen Doe</a></li>
                            <li class="list-inline-item">29 March 2021</li>
                        </ul>
                    </div>
                    <a href="blog-single.html">
                        <div class="thumb rounded">
                            <div class="inner data-bg-image" data-bg-image="{{  URL('assets-articles/images/posts/featured-xl-1.jpg')}}"></div>
                        </div>
                    </a>
                </div>
                <!-- post -->
                <div class="post featured-post-xl">
                    <div class="details clearfix">
                        <a href="category.html" class="category-badge lg">Culture</a>
                        <h4 class="post-title"><a href="blog-single.html">Important Thing You Need To Know About Swim</a></h4>
                        <ul class="meta list-inline mb-0">
                            <li class="list-inline-item"><a href="#">Katen Doe</a></li>
                            <li class="list-inline-item">29 March 2021</li>
                        </ul>
                    </div>
                    <a href="blog-single.html">
                        <div class="thumb rounded">
                            <div class="inner data-bg-image" data-bg-image="{{  URL('images/posts/featured-xl-2.jpg')}}"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


	<!-- section main content -->
    @yield('content')


	<!-- footer -->
    @include('layout-article.footer-articles')

</div><!-- end site wrapper -->

<!-- search popup area -->
<div class="search-popup">
	<!-- close button -->
	<button type="button" class="btn-close" aria-label="Close"></button>
	<!-- content -->
	<div class="search-content">
		<div class="text-center">
			<h3 class="mb-4 mt-0">Press X to close</h3>
		</div>
		<!-- form -->
		<form class="d-flex search-form">
			<input class="form-control me-2" type="search" placeholder="Search and press enter ..." aria-label="Search">
			<button class="btn btn-default btn-lg" type="submit"><i class="icon-magnifier"></i></button>
		</form>
	</div>
</div>

<!-- canvas menu -->
<div class="canvas-menu d-flex align-items-end flex-column">
	<!-- close button -->
	<button type="button" class="btn-close" aria-label="Close"></button>

	<!-- logo -->
	<div class="logo">
		<a href="#">My Apps</a>
	</div>

	<!-- menu -->
	<nav>
		<ul class="vertical-menu">
			<li class="active">
				<a>Home</a>
			</li>
			<li><a href="#">Lifestyle</a></li>
			<li><a href="#">Inspiration</a></li>
			<li>
				<a href="#">Categories</a>
				<ul class="submenu">
					<li><a href="#">Category Name</a></li>
					<li><a href="#">Category Name</a></li>
					<li><a href="#">Category Name</a></li>
					<li><a href="#">About</a></li>
				</ul>
			</li>
			<li><a href="#">Contact</a></li>
		</ul>
	</nav>

	<!-- social icons -->
	<ul class="social-icons list-unstyled list-inline mb-0 mt-auto w-100">
		<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
	</ul>
</div>

<!-- JAVA SCRIPTS -->
@include('layout-article.script-articles')

</body>
</html>
