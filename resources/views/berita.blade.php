@extends('layouts.template')
@section('content')
<!-- first -->
<div class="main-container container" id="main-container">

	<!-- Content -->
	<div class="row">

		<!-- post content -->
		<div class="col-lg-8 blog__content mb-30">

			<!-- Breadcrumbs -->
			<ul class="breadcrumbs">
				<li class="breadcrumbs__item">
					<a href="index.html" class="breadcrumbs__url"><i class="ui-home"></i></a>
				</li>
				<li class="breadcrumbs__item">
					<a href="index.html" class="breadcrumbs__url"></a>
				</li>
				<li class="breadcrumbs__item breadcrumbs__item--current">
					World
				</li>
			</ul>

			<!-- gallery post -->
			<article class="entry">

				<div class="single-post__entry-header entry__header">
					<a href="#" class="entry__meta-category"><?php
					$controller->kategori($berita->kategori); ?></a>
					<h1 class="single-post__entry-title">
						{{ $berita->judul }}
					</h1>

					<ul class="entry__meta"><i class="ui-date"></i>
						<li class="entry__meta-date">									
							<?php $controller->tanggal($berita->created_at); ?>										
						</li>
					</ul>
				</div>

				<!-- Entry Gallery -->
				<div class="entry__img-holder">
					<div id="owl-single-post-gallery" class="owl-carousel owl-theme owl-carousel--dots-inside">
						<article class="entry">
							<div class="thumb-bg-holder">
								<img src="{{ asset ('public/img')}}/{{ $berita->foto }}" data-src="{{ asset ('public/img')}}/{{ $berita->foto }}" alt="" >
							</div>
						</article>
					</div> 
				</div> <!-- end entry gallery -->

				<!-- Share -->
				<div class="entry__share">
					<div class="socials entry__share-socials">
						<a href="#" class="social social-facebook entry__share-social social--wide social--medium">
							<i class="ui-facebook"></i>
							<span class="social__text">Share on Facebook</span>
						</a>
						<a href="#" class="social social-twitter entry__share-social social--wide social--medium">
							<i class="ui-twitter"></i>
							<span class="social__text">Share on Twitter</span>
						</a>
						<a href="#" class="social social-google-plus entry__share-social social--medium">
							<i class="ui-google"></i>
						</a>
						<a href="#" class="social social-pinterest entry__share-social social--medium">
							<i class="ui-pinterest"></i>
						</a>
					</div>                    
				</div> <!-- share -->

				<div class="entry__article">
					<p>{!! $berita->isi !!}</p>
				</div> <!-- end entry article -->


				<!-- Prev / Next Post -->
				<nav class="entry-navigation">
					<div class="clearfix">
						<div class="entry-navigation--left">
							<i class="ui-arrow-left"></i>
							<span class="entry-navigation__label">Previous Post</span>
							<div class="entry-navigation__link">
								<a href="#" rel="next">How to design your first mobile app</a>
							</div>
						</div>
						<div class="entry-navigation--right">
							<span class="entry-navigation__label">Next Post</span>
							<i class="ui-arrow-right"></i>
							<div class="entry-navigation__link">
								<a href="#" rel="prev">Video Youtube format post. Made with WordPress</a>
							</div>
						</div>
					</div>
				</nav>

				<!-- Related Posts -->
				<div class="related-posts">
					<div class="title-wrap mt-40">
						<h5 class="uppercase">Related Posts</h5>
					</div>
					
					<div class="row row-20">
						@foreach ($beritaBaru as $berita)
						<div class="col-md-4">
							<article class="entry">
								<div class="entry__img-holder">
									<a href="single-post.html">
										<div class="thumb-container thumb-75">
											<img data-src="img/blog/carousel_img_1.jpg" src="img/blog/carousel_img_1.jpg" class="entry__img lazyload" alt="">
										</div>
									</a>
								</div>

								<div class="entry__body">
									<div class="entry__header">
										<h2 class="entry__title entry__title--sm">
											<a href="single-post.html">Satelite cost tens of millions or even hundreds of millions of dollars to build</a>
										</h2>
									</div>
								</div>
							</article>
						</div>	
						@endforeach						
					</div>
					
				</div> <!-- end related posts -->                

			</article> <!-- end gallery post -->


			<!-- Comments -->
			<div class="entry-comments mt-30">
				<div class="title-wrap mt-40">
					<h5 class="uppercase">3 comments</h5>
				</div>
				<ul class="comment-list">
					<li class="comment">  
						<div class="comment-body">
							<div class="comment-avatar">
								<img alt="" src="img/blog/comment_1.jpg">
							</div>
							<div class="comment-text">
								<h6 class="comment-author">Joeby Ragpa</h6>
								<div class="comment-metadata">
									<a href="#" class="comment-date">July 17, 2017 at 12:48 pm</a>
								</div>                      
								<p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
								<a href="#" class="comment-reply">Reply</a>
							</div>
						</div>
					</li>


				</ul>         
			</div> <!-- end comments -->


			<!-- Comment Form -->
			<div id="respond" class="comment-respond">
				<div class="title-wrap">
					<h5 class="comment-respond__title uppercase">Leave a Reply</h5>
				</div>
				<form id="form" class="comment-form" method="post" action="#">
					<p class="comment-form-comment">
						<!-- <label for="comment">Comment</label> -->
						<textarea id="comment" name="comment" rows="5" required="required" placeholder="Comment*"></textarea>
					</p>

					<div class="row row-20">
						<div class="col-lg-4">
							<input name="name" id="name" type="text" placeholder="Name*">
						</div>
						<div class="col-lg-4">
							<input name="email" id="email" type="email" placeholder="Email*">
						</div>
						<div class="col-lg-4">
							<input name="website" id="website" type="text" placeholder="Website">
						</div>
					</div>

					<p class="comment-form-submit">
						<input type="submit" class="btn btn-lg btn-color btn-button" value="Post Comment" id="submit-message">
					</p>

				</form>
			</div> <!-- end comment form -->

		</div> <!-- end col -->
		<!-- Sidebar -->
		@include('layouts.sidebar')
		<!-- end sidebar -->

	</div> <!-- end content -->
</div> <!-- end main container -->

@endsection