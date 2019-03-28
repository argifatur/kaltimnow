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
						<li class="newsticker__item"><a href="single-post.html" class="newsticker__item-url">Indahnya kebersamaan di hari lebaran</a></li>
						<li class="newsticker__item"><a href="single-post-1.html" class="newsticker__item-url">Prediksi Persija vs Borneo Fc, Duel orange </a></li>        
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

								<article class="entry featured-posts-grid__entry">
									<div class="thumb-bg-holder owl-lazy" data-src="{{ asset('public/img/ps.jpg') }}">    
										<img src="img/blog/featured_grid_slide_1.jpg" alt="" class="d-none">
										<a href="{{ route('post') }}" class="thumb-url"></a>
										<div class="bottom-gradient"></div>
									</div>

									<div class="thumb-text-holder">
										<a href="single-post.html" class="entry__meta-category entry__meta-category-color entry__meta-category-color--salad">Lifestyle</a>   
										<h2 class="thumb-entry-title">
											<a href="{{ route('post') }}">See a 360-Degree View of the Top of the Everest</a>
										</h2>
									</div>
								</article>

								<article class="entry featured-posts-grid__entry">
									<div class="thumb-bg-holder owl-lazy" data-src="{{ asset('public/img/warning.jpg') }}">
										<img src="img/blog/featured_grid_slide_2.jpg" alt="" class="d-none">
										<a href="single-post.html" class="thumb-url"></a>
										<div class="bottom-gradient"></div>
									</div>

									<div class="thumb-text-holder">
										<a href="single-post.html" class="entry__meta-category entry__meta-category-color entry__meta-category-blob:file:///6da42eff-39b5-471c-9ace-33784506db69color--blue">Business</a>   
										<h2 class="thumb-entry-title">
											<a href="single-post.html">BRICS Nations Agree to Create Own Development Bank</a>
										</h2>
									</div>
								</article>

								<article class="entry featured-posts-grid__entry">
									<div class="thumb-bg-holder owl-lazy" data-src="{{ asset('public/img/ci.png') }}">
										<img src="img/blog/featured_grid_slide_3.jpg" alt="" class="d-none">
										<a href="single-post.html" class="thumb-url"></a>
										<div class="bottom-gradient"></div>
									</div>

									<div class="thumb-text-holder">
										<a href="single-post.html" class="entry__meta-category entry__meta-category-color entry__meta-category-color--purple">Tech</a>   
										<h2 class="thumb-entry-title">
											<a href="single-post.html">Tesla's Giant Battery Farm Is Now Live in South Australia</a>
										</h2>
									</div>
								</article>

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
			<ul class="tabs__list">
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
				<div class="col-md-6">
					<article class="entry">
						<div class="entry__img-holder">
							<a href="single-post.html">
								<div class="thumb-container thumb-75">
									<img data-src="{{ asset('public/img/asus.jpg') }}" src="img/asus.jpg" class="entry__img lazyload" alt="" />
								</div>
							</a>
						</div>

						<div class="entry__body">
							<div class="entry__header">
								<a href="#" class="entry__meta-category">science</a>
								<h2 class="entry__title">
									<a href="{{ route('post') }}">Optimal Amount of Rainfall for Plants</a>
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
							<div class="entry__excerpt">
								<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
							</div>
						</div>
					</article>
				</div>
				<div class="col-md-6">
					<article class="entry">
						<div class="entry__img-holder">
							<a href="single-post.html">
								<div class="thumb-container thumb-75">
									<img data-src="{{ asset('public/img/res.png') }}" src="img/empty.png" class="entry__img lazyload" alt="" />
								</div>
							</a>
						</div>

						<div class="entry__body">
							<div class="entry__header">
								<a href="#" class="entry__meta-category">business</a>
								<h2 class="entry__title">
									<a href="single-post.html">BRICS Nations Agree to Create Own Development Bank</a>
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
							<div class="entry__excerpt">
								<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div> <!-- end pane 1 -->
		<div class="tabs__content-pane" id="tab-world">
			<div class="row">
				<div class="col-md-6">
					<article class="entry">
						<div class="entry__img-holder">
							<a href="single-post.html">
								<div class="thumb-container thumb-75">
									<img data-src="{{ asset('public/img/blog/grid_post_img_1.jpg') }}" src="img/empty.png" class="entry__img lazyload" alt="" />
								</div>
							</a>
						</div>

						<div class="entry__body">
							<div class="entry__header">
								<a href="#" class="entry__meta-category">science</a>
								<h2 class="entry__title">
									<a href="single-post.html">Optimal Amount of Rainfall for Plants</a>
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
							<div class="entry__excerpt">
								<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
							</div>
						</div>
					</article>
				</div>
				<div class="col-md-6">
					<article class="entry">
						<div class="entry__img-holder">
							<a href="single-post.html">
								<div class="thumb-container thumb-75">
									<img data-src="{{ asset('public/img/blog/grid_post_img_2.jpg') }}" src="img/empty.png" class="entry__img lazyload" alt="" />
								</div>
							</a>
						</div>

						<div class="entry__body">
							<div class="entry__header">
								<a href="#" class="entry__meta-category">business</a>
								<h2 class="entry__title">
									<a href="single-post.html">BRICS Nations Agree to Create Own Development Bank</a>
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
							<div class="entry__excerpt">
								<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div> <!-- end pane 2 -->
		<div class="tabs__content-pane" id="tab-business">
			<div class="row">
				<div class="col-md-6">
					<article class="entry">
						<div class="entry__img-holder">
							<a href="single-post.html">
								<div class="thumb-container thumb-75">
									<img data-src="img/blog/grid_post_img_1.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
								</div>
							</a>
						</div>

						<div class="entry__body">
							<div class="entry__header">
								<a href="#" class="entry__meta-category">science</a>
								<h2 class="entry__title">
									<a href="single-post.html">Optimal Amount of Rainfall for Plants</a>
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
							<div class="entry__excerpt">
								<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
							</div>
						</div>
					</article>
				</div>
				<div class="col-md-6">
					<article class="entry">
						<div class="entry__img-holder">
							<a href="single-post.html">
								<div class="thumb-container thumb-75">
									<img data-src="img/blog/grid_post_img_2.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
								</div>
							</a>
						</div>

						<div class="entry__body">
							<div class="entry__header">
								<a href="#" class="entry__meta-category">business</a>
								<h2 class="entry__title">
									<a href="single-post.html">BRICS Nations Agree to Create Own Development Bank</a>
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
							<div class="entry__excerpt">
								<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div> <!-- end pane 3 -->
		<div class="tabs__content-pane" id="tab-politics">
			<div class="row">
				<div class="col-md-6">
					<article class="entry">
						<div class="entry__img-holder">
							<a href="single-post.html">
								<div class="thumb-container thumb-75">
									<img data-src="img/blog/grid_post_img_1.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
								</div>
							</a>
						</div>

						<div class="entry__body">
							<div class="entry__header">
								<a href="#" class="entry__meta-category">science</a>
								<h2 class="entry__title">
									<a href="single-post.html">Optimal Amount of Rainfall for Plants</a>
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
							<div class="entry__excerpt">
								<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
							</div>
						</div>
					</article>
				</div>
				<div class="col-md-6">
					<article class="entry">
						<div class="entry__img-holder">
							<a href="single-post.html">
								<div class="thumb-container thumb-75">
									<img data-src="img/blog/grid_post_img_2.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
								</div>
							</a>
						</div>

						<div class="entry__body">
							<div class="entry__header">
								<a href="#" class="entry__meta-category">business</a>
								<h2 class="entry__title">
									<a href="single-post.html">BRICS Nations Agree to Create Own Development Bank</a>
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
							<div class="entry__excerpt">
								<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div> <!-- end pane 4 -->
		<div class="tabs__content-pane" id="tab-marketing">
			<div class="row">
				<div class="col-md-6">
					<article class="entry">
						<div class="entry__img-holder">
							<a href="single-post.html">
								<div class="thumb-container thumb-75">
									<img data-src="img/blog/grid_post_img_1.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
								</div>
							</a>
						</div>

						<div class="entry__body">
							<div class="entry__header">
								<a href="#" class="entry__meta-category">science</a>
								<h2 class="entry__title">
									<a href="single-post.html">Optimal Amount of Rainfall for Plants</a>
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
							<div class="entry__excerpt">
								<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
							</div>
						</div>
					</article>
				</div>
				<div class="col-md-6">
					<article class="entry">
						<div class="entry__img-holder">
							<a href="single-post.html">
								<div class="thumb-container thumb-75">
									<img data-src="img/blog/grid_post_img_2.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
								</div>
							</a>
						</div>

						<div class="entry__body">
							<div class="entry__header">
								<a href="#" class="entry__meta-category">business</a>
								<h2 class="entry__title">
									<a href="single-post.html">BRICS Nations Agree to Create Own Development Bank</a>
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
							<div class="entry__excerpt">
								<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div> <!-- end pane 5 -->
	</div> <!-- end tab content -->            
</section> <!-- end hot news -->

<!-- Latest News -->
<section class="section">
	<div class="title-wrap">
		<h3 class="section-title">Latest News</h3>
		<a href="#" class="all-posts-url">View All</a>
	</div>

	<article class="entry post-list">
		<div class="entry__img-holder post-list__img-holder">
			<a href="single-post.html">
				<div class="thumb-container thumb-75">
					<img data-src="{{ asset('public/img/asus.jpg') }}" src="img/empty.png" class="entry__img lazyload" alt="">
				</div>
			</a>
		</div>

		<div class="entry__body post-list__body">
			<div class="entry__header">
				<a href="#" class="entry__meta-category">business</a>
				<h2 class="entry__title">
					<a href="single-post.html">Your Business Is Talking. Do You Have the Tools to Listen?</a>
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
			<div class="entry__excerpt">
				<p>Point of Sale hardware, the till at a shop check out, has become very complex over the past ten years. Modern POS hardware includes the cash till, bar-code readers...</p>
			</div>
		</div>
	</article>

	<article class="entry post-list">
		<div class="entry__img-holder post-list__img-holder">
			<a href="single-post.html">
				<div class="thumb-container thumb-75">
					<img data-src="{{ asset('public/img/warning.jpg') }}" src="img/empty.png" class="entry__img lazyload" alt="">
				</div>
			</a>
		</div>

		<div class="entry__body post-list__body">
			<div class="entry__header">
				<a href="#" class="entry__meta-category">tech</a>
				<h2 class="entry__title">
					<a href="single-post.html">Removing Bitcoin payments from Steam is a smart move by Valve</a>
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
			<div class="entry__excerpt">
				<p>Point of Sale hardware, the till at a shop check out, has become very complex over the past ten years. Modern POS hardware includes the cash till, bar-code readers...</p>
			</div>
		</div>
	</article>

	<article class="entry post-list">
		<div class="entry__img-holder post-list__img-holder">
			<a href="single-post.html">
				<div class="thumb-container thumb-75">
					<img data-src="{{ asset('public/img/ps.jpg') }}" src="img/empty.png" class="entry__img lazyload" alt="">
				</div>
			</a>
		</div>

		<div class="entry__body post-list__body">
			<div class="entry__header">
				<a href="#" class="entry__meta-category">fashion</a>
				<h2 class="entry__title">
					<a href="single-post.html">This Is the Burberry Bag Every Fashion Girl Wanted 15 Years Ago</a>
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
			<div class="entry__excerpt">
				<p>Point of Sale hardware, the till at a shop check out, has become very complex over the past ten years. Modern POS hardware includes the cash till, bar-code readers...</p>
			</div>
		</div>
	</article>

</section> <!-- end latest news -->



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
		<article class="entry">
			<div class="entry__img-holder">
				<a href="single-post.html">
					<div class="thumb-container thumb-75">
						<img data-src="{{ asset('public/img/aasd.png') }}" src="img/aasd.png" class="entry__img owl-lazy" alt="" />
					</div>
				</a>
			</div>

			<div class="entry__body">
				<div class="entry__header">
					<h2 class="entry__title entry__title--sm">
						<a href="single-post.html">The Surprising Way This Designer Picked the Next It Colors</a>
					</h2>
					<ul class="entry__meta">
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
			</div>
		</article>
		<article class="entry">
			<div class="entry__img-holder">
				<a href="single-post.html">
					<div class="thumb-container thumb-75">
						<img data-src="{{ asset('public/img/res.png') }}" src="img/res.png" class="entry__img owl-lazy" alt="" />
					</div>
				</a>
			</div>

			<div class="entry__body">
				<div class="entry__header">
					<h2 class="entry__title entry__title--sm">
						<a href="single-post.html">What Fashion Editors Are Buying for Every Kid on Our Holiday List</a>
					</h2>
					<ul class="entry__meta">
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
			</div>
		</article>
		<article class="entry">
			<div class="entry__img-holder">
				<a href="single-post.html">
					<div class="thumb-container thumb-75">
						<img data-src="{{ asset('public/img/ukhuwahislamiah.jpg') }}" src="{{ ('img/ukhuwahislamiah.jpg') }}" class="entry__img owl-lazy" alt="" />
					</div>
				</a>
			</div>

			<div class="entry__body">
				<div class="entry__header">
					<h2 class="entry__title entry__title--sm">
						<a href="single-post.html">Why Coach's Cute New Holiday Collab Is Unexpected</a>
					</h2>
					<ul class="entry__meta">
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
			</div>
		</article>
	</div> <!-- end slider -->

</section>

</div> <!-- end posts -->

@include('layouts.sidebar')

</div> <!-- end content -->
</div> <!-- end main container -->

@endsection