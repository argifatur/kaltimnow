<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kaltim Now</title>

	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="">

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet'>
	<!-- Css -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/css/font-awesome.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/css/font-awesome.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/css/font-icons.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/css/style.css') }}"/>

	<!-- Favicons -->
	<link rel="shortcut icon" href="{{ asset('public/img/ikon.png') }}">
	<link rel="apple-touch-icon" href="{{ asset('public/img/ikon.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('public/img/ikon.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('public/img/ikon.png') }}">

	<!-- Lazyload -->
	<script src="{{ asset('public/js/lazysizes.min.js') }}"></script>

</head>

<body class="bg-blue">

	<!-- Preloader -->
	<div class="loader-mask">
		<div class="loader">
			<div></div>
		</div>
	</div>

	<!-- Bg Overlay -->
	<div class="content-overlay"></div>

	<!-- Sidenav -->    
	<header class="sidenav" id="sidenav">

		<!-- close -->
		<div class="sidenav__close">
			<button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
				<i class="ui-close sidenav__close-icon"></i>
			</button>
		</div>

		<!-- Nav -->
		<nav class="sidenav__menu-container">
			<ul class="sidenav__menu" role="menubar">
				<!-- Categories -->
				<li>
					<a href="{{ route('/') }}" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--orange">Beranda</a>
				</li>
				<li>
					<a href="{{ route('about') }}" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--blue">Tentang Kami </a>
				</li>
				<li>
					<a href="{{ route('daftarpost') }}" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--salad">Post</a>
				</li>

				<li>
					<a href="{{ route('categori') }}" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--light-blue">Kategori</a>
				</li>

      <!--   <li>
          <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--salad">Post</a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li><a href="single-post.html" class="sidenav__menu-link">Gallery Post</a></li>
            <li><a href="single-post.html" class="sidenav__menu-link">Video Post</a></li>
          </ul>
        </li>

        <li>
          <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--violet">Pages</a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li><a href="search-results.html" class="sidenav__menu-link">Search Results</a></li>
            <li><a href="categories.html" class="sidenav__menu-link">Categories</a></li>
          </ul>
      </li> -->

      <li>
      	<a href="{{ route('kontak') }}" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--red">Kontak</a>
      </li>
  </ul>
</nav>
</header> <!-- end sidenav -->

<main class="main oh" id="main">

	<!-- Navigation -->
	<header class="nav">

		<div class="nav__holder nav--sticky">
			<div class="container relative">
				<div class="flex-parent">

					<!-- Side Menu Button -->
					<button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open side menu">
						<span class="nav-icon-toggle__box">
							<span class="nav-icon-toggle__inner"></span>
						</span>
					</button> <!-- end Side menu button -->

					<!-- Mobile logo -->
					<a href="index.html" class="logo logo--mobile d-lg-none">
						<img class="logo__img_mobile" src="{{ asset('public/img/logo.png') }}"  alt="logo">
					</a>

					<!-- Nav-wrap -->
					<nav class="flex-child nav__wrap d-none d-lg-block">              
						<ul class="nav__menu">

							<li class="active">
								<a href="{{ route('/') }}">Beranda</a>
							</li>

							<li>
								<a href="{{ route('about') }}">Tentang Kami</a>
							</li>

							<li>
								<a href="{{ route('daftarpost') }}">Post</a>
							</li>

							<li>
								<a href="{{ route('categori') }}">Kategori</a>
							</li>
<!-- 
                <li class="nav__dropdown">
                  <a href="#">Pages</a>
                  <ul class="nav__dropdown-menu">
                    <li><a href="search-results.html" class="sidenav__menu-link">Search Results</a></li>
                    <li><a href="categories.html">Categories</a></li>
                  </ul>
                </li>
            -->
                <!-- <li class="nav__dropdown">
                  <a href="#">Features</a>
                  <ul class="nav__dropdown-menu">
                    <li><a href="lazyload.html">Lazy Load</a></li>
                    <li><a href="shortcodes.html">Shortcodes</a></li>
                  </ul>
              </li> -->

              <li>
              	<a href="{{ route('kontak') }}">Kontak</a>
              </li>


          </ul> <!-- end menu -->
      </nav> <!-- end nav-wrap -->

      <!-- Nav Right -->
      <div class="nav__right nav--align-right d-lg-flex">

      	<!-- Socials -->
      	<div class="nav__right-item socials nav__socials d-none d-lg-flex"> 
      		<a class="social social-facebook social--nobase" href="#" title="facebook" target="_blank" aria-label="facebook">
      			<i class="ui-facebook"></i>
      		</a>
      		<a class="social social-twitter social--nobase" href="#" title="twitter" target="_blank" aria-label="twitter">
      			<i class="ui-twitter"></i>
      		</a>
      		<a class="social social-google social--nobase" href="#" title="google" target="_blank" aria-label="google">
      			<i class="ui-google"></i>
      		</a>
      		<a class="social social-youtube social--nobase" href="#" title="youtube" target="_blank" aria-label="youtube">
      			<i class="ui-youtube"></i>
      		</a>
      		<a class="social social-instagram social--nobase" href="#" title="instagasdram" target="_blank" aria-label="instagram">
      			<i class="ui-instagram"></i>
      		</a>
      	</div>

      	<!-- Search -->
      	<div class="nav__right-item nav__search">
      		<a href="#" class="nav__search-trigger" id="nav__search-trigger">
      			<i class="ui-search nav__search-trigger-icon"></i>
      		</a>
      		<div class="nav__search-box" id="nav__search-box">
      			<form class="nav__search-form">
      				<input type="text" placeholder="Search an article" class="nav__search-input">
      				<button type="submit" class="search-button btn btn-lg btn-color btn-button">
      					<i class="ui-search nav__search-icon"></i>
      				</button>
      			</form>
      		</div>

      	</div>

      </div> <!-- end nav right -->  

  </div> <!-- end flex-parent -->
</div> <!-- end container -->

</div>
</header> <!-- end navigation -->

<!-- Header -->
<div class="header">
	<div class="container">
		<div class="flex-parent align-items-center">

			<!-- Logo -->
			<a href="index.html" class="logo d-none d-lg-block">
				<img class="logo__img" src="{{ asset('public/img/logo.png') }}" srcset="{{ asset('public/img/logo.png, img/logo.png') }}" alt="logo">
			</a>

			<!-- Ad Banner 728 -->
			<div class="text-center">
				<a href="#">
					@foreach( $banner as $banner)

					<img src="public/img/{{ $banner->foto }}" alt="banner">

					@endforeach
				</a>
			</div>

		</div>
	</div>
</div> <!-- end header -->

@yield('content')

<!-- Footer -->
<footer class="footer footer--dark">
	<div class="container">
		<div class="footer__widgets">
			<div class="row">

				<div class="col-lg-4 col-md-8">
					<div class="widget">						
						<img src="{{ asset('public/img/logo.png') }}" srcset="{{ asset('public/img/logo.png 1x, img/logo.png 2x') }}" class="logo__img_footer" alt="">						
						<p> Copyright © 2019 Kaltim Now By : <a href="https://utamaweb.com" target="_blank"> Utama Web</a></p>						
					</div>
				</div>

				<div class="col-lg-4 col-md-8">
					<h4 class="widget-title">Latest Posts</h4>
					<ul class="post-list-small">
						<li class="post-list-small__item">
							<article class="post-list-small__entry clearfix">
								<div class="post-list-small__img-holder">
									<div class="thumb-container thumb-75">
										<a href="single-post.html">
											<img data-src="{{ asset('public/img/ps.jpg') }}" src="{{ asset('public/img/ps.jpg') }}" alt="" class="lazyload">
										</a>
									</div>
								</div>
								<div class="post-list-small__body">
									<h3 class="post-list-small__entry-title">
										<a href="single-post.html">Google is fixing its troubling burger emoji in Android 8.1</a>
									</h3>
									<ul class="entry__meta">
										<li class="entry__meta-date">
											<i class="ui-date"></i>
											21 October, 2017
										</li>
									</ul>
								</div>                  
							</article>
						</li>
						<li class="post-list-small__item">
							<article class="post-list-small__entry clearfix">
								<div class="post-list-small__img-holder">
									<div class="thumb-container thumb-75">
										<a href="single-post.html">
											<img data-src="{{ asset('public/img/blog/popular_post_2.jpg') }}" src="{{ asset('public/img/empty.png') }}" alt="" class="lazyload">
										</a>
									</div>
								</div>
								<div class="post-list-small__body">
									<h3 class="post-list-small__entry-title">
										<a href="single-post.html">How Meditation Can Transform Your Business</a>
									</h3>
									<ul class="entry__meta">
										<li class="entry__meta-date">
											<i class="ui-date"></i>
											21 October, 2017
										</li>
									</ul>
								</div>                  
							</article>
						</li>
					</ul>
				</div>

				<div class="col-lg-4 col-md-8">
					<div class="widget widget__newsletter">
						<h4 class="widget-title">Follow us</h4>

						<div class="socials mb-20">
							<a href="#" class="social social-facebook" aria-label="facebook"><i class="ui-facebook"></i></a>
							
							
							<a href="#" class="social social-youtube" aria-label="youtube"><i class="ui-youtube"></i></a>
							<a href="#" class="social social-instagram" aria-label="instagram"><i class="ui-instagram"></i></a>
						</div>

						<form class="mc4wp-form" method="post">
							<div class="mc4wp-form-fields">
								<p>
									<input type="email" name="EMAIL" placeholder="Your email" required="">
								</p>
								<p>
									<input type="submit" class="btn btn-lg btn-color" value="Subscribe">
								</p>
							</div>
						</form>

					</div>
				</div>            
			</div>
		</div>    
	</div> <!-- end container -->

	<div class="footer__bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 order-lg-2 text-right text-md-center">
					<div class="widget widget_nav_menu">
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Contact Us</a></li>
						</ul>
					</div>              
				</div>
				<div class="col-lg-5 order-lg-1 text-md-center">
					<span class="copyright">
						&copy; 2019 Kaltim Now | Made by <a href="http://utamaweb.com">Utama Web</a>
					</span>
				</div>            
			</div>

		</div>
	</div> <!-- end bottom footer -->
</footer> <!-- end footer -->

<div id="back-to-top">
	<a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
</div>
<script>
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})
</script>

<!-- jQuery Scripts -->
<script src="{{ asset('public/js/jquery.min.js') }}"></script>
<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/js/easing.min.js') }}"></script>
<script src="{{ asset('public/js/owl-carousel.min.js') }}"></script>
<script src="{{ asset('public/js/twitterFetcher_min.js') }}"></script>
<script src="{{ asset('public/js/jquery.newsTicker.min.js') }}"></script>  
<script src="{{ asset('public/js/modernizr.min.js') }}"></script>
<script src="{{ asset('public/js/scripts.js') }}"></script>

</body>
</html>