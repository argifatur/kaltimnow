
<!-- Sidebar -->
<aside class="col-lg-4 sidebar sidebar--right">

	<!-- Widget Popular/Latest Posts -->
	<div class="widget widget-tabpost">
		<div class="tabs widget-tabpost__tabs">
			<ul class="tabs__list widget-tabpost__tabs-list">
				<li class="tabs__item widget-tabpost__tabs-item tabs__item--active">
					<a href="#tab-trending" class="tabs__url tabs__trigger widget-tabpost__tabs-url">Trending</a>
				</li>                                 
				<li class="tabs__item widget-tabpost__tabs-item">
					<a href="#tab-latest" class="tabs__url tabs__trigger widget-tabpost__tabs-url">Latest</a>
				</li>                                
			</ul> <!-- end tabs -->

			<!-- tab content -->
			<div class="tabs__content tabs__content-trigger widget-tabpost__tabs-content">

				<div class="tabs__content-pane tabs__content-pane--active" id="tab-trending">
					<ul class="post-list-small">
						@foreach ($beritaPopuler as $berita)
						<li class="post-list-small__item">
							<article class="post-list-small__entry clearfix">
								<div class="post-list-small__img-holder">
									<div class="thumb-container thumb-75">
										<a href="berita/{{ $berita->path }}">
											<img data-src="{{ asset ('public/img')}}/{{ $berita->foto }}" src="{{ asset ('public/img')}}/{{ $berita->foto }}" alt="" class=" lazyload">
										</a>
									</div>
								</div>
								<div class="post-list-small__body">
									<h3 class="post-list-small__entry-title">
										<a href="berita/{{ $berita->path }}">{{ $berita->judul }}</a>
									</h3>
									<ul class="entry__meta"><i class="ui-date"></i>
										<li class="entry__meta-date">									
											<?php $controller->tanggal($berita->created_at); ?>										
										</li>
									</ul>
								</div>                  
							</article>
						</li>
						@endforeach
					</ul>
				</div>

				<div class="tabs__content-pane" id="tab-latest">
					<ul class="post-list-small">
						@foreach ($beritaBaru as $berita)
						<li class="post-list-small__item">
							<article class="post-list-small__entry clearfix">
								<div class="post-list-small__img-holder">
									<div class="thumb-container thumb-75">
										<a href="berita/{{ $berita->path }}">
											<img data-src="public/img/{{ $berita->foto }}" src="public/img/{{ $berita->foto }}" alt="" class=" lazyload">
										</a>
									</div>
								</div>
								<div class="post-list-small__body">
									<h3 class="post-list-small__entry-title">
										<a href="berita/{{ $berita->path }}">{{ $berita->judul }}</a>
									</h3>
									<ul class="entry__meta"><i class="ui-date"></i>
										<li class="entry__meta-date">									
											<?php $controller->tanggal($berita->created_at); ?>										
										</li>
									</ul>
								</div>                  
							</article>
						</li>
						@endforeach
						
					</ul>
				</div>

				<div class="tabs__content-pane" id="tab-comments">
					<ul class="post-list-small">
						<li class="post-list-small__item">
							<article class="post-list-small__entry clearfix">
								<div class="post-list-small__img-holder">
									<div class="thumb-container thumb-75">
										<a href="single-post.html">
											<img data-src="{{ asset('public/img/blog/popular_post_3.jpg') }}" src="img/empty.png" alt="" class=" lazyload">
										</a>
									</div>
								</div>
								<div class="post-list-small__body">
									<h3 class="post-list-small__entry-title">
										<a href="single-post.html">June in Africa: Taxi wars, smarter cities and increased investments</a>
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
											<img data-src="{{ asset('public/img/blog/popular_post_1.jpg') }}" src="img/empty.png" alt="" class=" lazyload">
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
											<img data-src="{{ asset('public/img/blog/popular_post_2.jpg') }}" src="img/empty.png" alt="" class=" lazyload">
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
						<li class="post-list-small__item">
							<article class="post-list-small__entry clearfix">
								<div class="post-list-small__img-holder">
									<div class="thumb-container thumb-75">
										<a href="single-post.html">
											<img data-src="{{ asset('public/img/blog/popular_post_4.jpg') }}" src="img/empty.png" alt="" class=" lazyload">
										</a>
									</div>
								</div>
								<div class="post-list-small__body">
									<h3 class="post-list-small__entry-title">
										<a href="single-post.html">PUBG Desert Map Finally Revealed, Here Are All The Details</a>
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

			</div> <!-- end tab content -->
		</div> <!-- end tabs -->            
	</div> <!-- end widget popular/latest posts -->

	<!-- Widget Ad 300 -->
	<div class="widget widget_media_image">
		<a href="#">
			<img src="{{ asset('public/img/teh.jpg') }}" alt="">
		</a>
	</div> <!-- end widget ad 300 -->          



	<!-- Widget Ad 125 -->
	<div class="widget widget-gallery-sm">
		<ul class="widget-gallery-sm__list">
			<li class="widget-gallery-sm__item">
				<a href="#"><img src="{{ asset('public/img/iklan1.jpg') }}" alt=""></a>
			</li>
			<li class="widget-gallery-sm__item">
				<a href="#"><img src="{{ asset('public/img/iklan2.png') }}" alt=""></a>
			</li>
			<li class="widget-gallery-sm__item">
				<a href="#"><img src="{{ asset('public/img/iklan3.jpg') }}" alt=""></a>
			</li>
			<li class="widget-gallery-sm__item">
				<a href="#"><img src="{{ asset('public/img/iklan4.jpg') }}" alt=""></a>
			</li>
		</ul>
	</div> <!-- end widget ad 300 -->


	<!-- Widget Socials -->
	<div class="widget widget-socials">
		<h4 class="widget-title">Follow us</h4>
		<div class="socials">
			<a class="social social-facebook social--large" href="#" title="facebook" target="_blank" aria-label="facebook">
				<i class="ui-facebook"></i>
			</a>			
			<a class="social social-instagram social--large" href="#" title="instagram" target="_blank" aria-label="instagram">
				<i class="ui-instagram"></i>
			</a>
			<a class="social social-youtube social--large" href="#" title="youtube" target="_blank" aria-label="youtube">
				<i class="ui-youtube"></i>
			</a>

		</div>
	</div> <!-- end widget socials -->

</aside> <!-- end sidebar -->