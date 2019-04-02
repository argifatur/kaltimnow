@extends('layouts.template')
@section('content')

<div class="main-container container" id="main-container">         

	<!-- Content -->
	<div class="row">

		<!-- Posts -->
		<div class="col-lg-8 blog__content mb-30">

			<!-- Trending Now -->
			<div class="trending-now">
				<div class="container relative">
					<span class="trending-now__label">Trending</span>
					<ul class="newsticker">

						@foreach ($beritaPopuler as $berita)
						<li class="newsticker__item"><a href="single-post.html" class="newsticker__item-url">{{ $berita->judul }}</a></li> 
						@endforeach

					</ul>
					<div class="newsticker-buttons">
						<button class="newsticker-button newsticker-button--prev" id="newsticker-button--prev" aria-label="next article"><i class="ui-arrow-left"></i></button>
						<button class="newsticker-button newsticker-button--next" id="newsticker-button--next" aria-label="previous article"><i class="ui-arrow-right"></i></button>
					</div>        
					<hr>
				</div>
			</div>    

			<!-- Featured Posts Grid -->
			<div class="col-lg-12">      
				<section class="featured-posts-grid bg-dark">
					<div class="container clearfix">

						<!-- Large post slider -->
						<div class="featured-posts-grid__item featured-posts-grid__item">
							<div id="owl-hero-grid" class="owl-carousel owl-theme owl-carousel--dots-inside">
								@foreach($slides as $slide)

								<article class="entry featured-posts-grid__entry">
									<div class="thumb-bg-holder owl-lazy" data-src="public/img/{{ $slide->foto }}">    
										<img src="img/blog/featured_grid_slide_1.jpg" alt="" class="d-none">
										<a href="{{ route('post') }}" class="thumb-url"></a>

										<div class="bottom-gradient"></div>
									</div>
									
									<div class="thumb-text-holder">
										<a href="single-post.html" class="entry__meta-category entry__meta-category-color entry__meta-category-color--salad"><?php
										$controller->kategori($slide->kategori); ?></a>   
										<h2 class="thumb-entry-title">
											<a href="{{ route('post') }}">{{ $slide->judul }}</a>
										</h2>
									</div>
								</article>
								@endforeach

							</div> <!-- end owl slider -->
						</div> <!-- end large post slider -->

<!-- 
              <div class="featured-posts-grid__item featured-posts-grid__item--sm">        
                <article class="entry featured-posts-grid__entry">
                  <div class="thumb-bg-holder" style="background-image: url(img/warning.jpg);">
                    <a href="single-post.html" class="thumb-url"></a>
                    <div class="bottom-gradient"></div>
                  </div>

                  <div class="thumb-text-holder">  
                    <h2 class="thumb-entry-title thumb-entry-title--sm">
                      <a href="single-post.html">These Are the 20 Best Places to Work in 2018</a>
                    </h2>
                    <ul class="entry__meta">
                      <li class="entry__meta-author">
                        <i class="ui-author"></i>
                        <a href="#">DeoThemes</a>
                      </li>
                      <li class="entry__meta-date">
                        <i class="ui-date"></i>
                        21 October, 2017
                      </li>
                      <li class="entry__meta-comments">
                        <i class="ui-comments"></i>
                        <a href="#">115</a>
                      </li>               
                    </ul>
                  </div>
                </article>
            </div> -->
<!-- 
              <div class="featured-posts-grid__item featured-posts-grid__item--sm">        
                <article class="entry featured-posts-grid__entry">
                  <div class="thumb-bg-holder" style="background-image: url(img/ukhuwahislamiah.jpg);">
                    <a href="single-post.html" class="thumb-url"></a>
                    <div class="bottom-gradient"></div>
                  </div>

                  <div class="thumb-text-holder">  
                    <h2 class="thumb-entry-title thumb-entry-title--sm">
                      <a href="single-post.html">Experience the Grand Canyon National Park</a>
                    </h2>
                    <ul class="entry__meta">
                      <li class="entry__meta-author">
                        <i class="ui-author"></i>
                        <a href="#">DeoThemes</a>
                      </li>
                      <li class="entry__meta-date">
                        <i class="ui-date"></i>
                        21 October, 2017
                      </li>
                      <li class="entry__meta-comments">
                        <i class="ui-comments"></i>
                        <a href="#">115</a>
                      </li>               
                    </ul>
                  </div>
                </article>
            </div> -->

        </div>
    </div>
</section> <!-- end featured posts grid -->
<hr>
<!-- Hot News -->

<section class="section tab-post mb-10">
	<div class="title-wrap">
		<h3 class="section-title">Hot News</h3>

		<div class="tabs tab-post__tabs"> 
		<!-- 	<ul class="tabs__list">
				<li class="tabs__item tabs__item--active">
					<a href="#tab-all" class="tabs__trigger">All</a>
				</li>
				<li class="tabs__item">
					<a href="#tab-world" class="tabs__trigger">World</a>
				</li>
				<li class="tabs__item">
					<a href="#tab-business" class="tabs__trigger">Business</a>
				</li>
				<li class="tabs__item">
					<a href="#tab-politics" class="tabs__trigger">Politics</a>
				</li>
				<li class="tabs__item">
					<a href="#tab-marketing" class="tabs__trigger">Marketing</a>
				</li>
			</ul> <!-- end tabs --> 
		</div>
	</div>

	<!-- tab content -->
	<div class="tabs__content tabs__content-trigger tab-post__tabs-content">

		<div class="tabs__content-pane tabs__content-pane--active" id="tab-all">
			<div class="row">
				@foreach ($beritaBaru as $berita)
				<div class="col-md-6">
					<article class="entry">
						<div class="entry__img-holder">
							<a href="single-post.html">
								<div class="thumb-container thumb-75">
									<img data-src="public/img/{{ $berita->foto }}" src="public/img/{{ $berita->foto }}" class="entry__img lazyload" alt="" />
								</div>
							</a>
						</div>

						<div class="entry__body">
							<div class="entry__header">
								<a href="#" class="entry__meta-category"><?php
								$controller->kategori($berita->kategori); ?></a>
								<h2 class="entry__title">
									<a href="">{{ $berita->judul }}</a>
								</h2>
								<ul class="entry__meta"><i class="ui-date"></i>
									<li class="entry__meta-date">									
										<?php $controller->tanggal($berita->created_at); ?>										
									</li>
								</ul>							
							</div>
								<div class="entry__excerpt">
									<?php $isi = (strlen($berita->isi) > 200) ? substr($berita->isi, 0, 200) . "..." : $berita->isi; ?>
									<p>{!! $isi !!} <a href="{{ route('post') }}">Readmore</a></p>
								</div>
							</div>
						</article>
					</div>
					@endforeach			
				</div> <!-- end tab content -->            
			</section> <!-- end hot news -->

			<!-- Latest News -->
			<section class="section">
				<div class="title-wrap">
					<h3 class="section-title">Latest News</h3>
					<a href="#" class="all-posts-url">View All</a>
				</div>
				@foreach($beritaHot as $berita)
				<article class="entry post-list">
					<div class="entry__img-holder post-list__img-holder">
						<a href="single-post.html">
							<div class="thumb-container thumb-75">
								<img data-src="public/img/{{ $berita->foto }}" src="public/img/{{ $berita->foto }}" class="entry__img lazyload" alt="">
							</div>
						</a>
					</div>

					<div class="entry__body post-list__body">
						<div class="entry__header">
							<a href="#" class="entry__meta-category"><?php
							$controller->kategori($berita->kategori); ?></a>
							<h2 class="entry__title">
								<a href="single-post.html">{{$berita->judul}}</a>
							</h2>
							<ul class="entry__meta"><i class="ui-date"></i>
								<li class="entry__meta-date">									
									<?php $controller->tanggal($berita->created_at); ?>										
								</li>
							</ul>
						</div>
						<div class="entry__excerpt">
							<?php $isi = (strlen($berita->isi) > 200) ? substr($berita->isi, 0, 200) . "..." : $berita->isi; ?>
							<p>{!! $isi !!}</p>
						</div>
					</div>
				</article>
				@endforeach

				<!-- Carousel posts -->
				<section class="section mb-20">
					<div class="title-wrap">
						<h3 class="section-title section-title--sm">More News</h3>
						<div class="carousel-nav">
							<button class="carousel-nav__btn carousel-nav__btn--prev" aria-label="previous slide">
								<i class="ui-arrow-left"></i>
							</button>
							<button class="carousel-nav__btn carousel-nav__btn--next" aria-label="next slide">
								<i class="ui-arrow-right"></i>
							</button>
						</div>
					</div>

					<!-- Slider -->
					<div id="owl-posts" class="owl-carousel owl-theme">
						@foreach($beritaBaru as $berita)
						<article class="entry">
							<div class="entry__img-holder">
								<a href="single-post.html">
									<div class="thumb-container thumb-75">
										<img data-src="public/img/{{ $berita->foto }}" src="public/img/{{ $berita->foto }}" class="entry__img owl-lazy" alt="" />
									</div>
								</a>
							</div>

							<div class="entry__body">
								<div class="entry__header">
									<h2 class="entry__title entry__title--sm">
										<a href="single-post.html">{{ $berita->judul }}</a>
									</h2>
									<ul class="entry__meta"><i class="ui-date"></i>
										<li class="entry__meta-date">									
											<?php $controller->tanggal($berita->created_at); ?>										
										</li>
									</ul>
								</div>
							</div>
						</article>
						@endforeach
					</div> <!-- end slider -->
				</section>
			</div> <!-- end posts -->

			@include('layouts.sidebar')

		</div> <!-- end content -->
	</div> <!-- end main container -->
	@endsection