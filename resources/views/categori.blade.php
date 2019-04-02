@extends('layouts.template')
@section('content')

<div class="main-container container" id="main-container">

	<!-- Content -->
	<div class="row">

		<!-- post content -->
		<div class="col-lg-8 blog__content mb-30">
			<div class="row">
				@foreach($beritaBaru as $berita)
				<div class="col-md-6">
					<div class="title-wrap">
						<h1><?php $controller->kategori($berita->kategori); ?></h1>
					</div>
					<article class="entry">
						<div class="entry__img-holder">
							<a href="single-post.html">
								<div class="thumb-container thumb-75">
									<img data-src="img/blog/grid_post_img_3.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
								</div>
							</a>
						</div>

						<div class="entry__body">
							<div class="entry__header">
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
				</div>
				@endforeach
			</div>
			
			<!-- Pagination -->
			<nav class="pagination">
				<span class="pagination__page pagination__page--current">1</span>
				<a href="#" class="pagination__page">2</a>
				<a href="#" class="pagination__page">3</a>
				<a href="#" class="pagination__page">4</a>
				<a href="#" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-right"></i></a>
			</nav>
			
		</div> <!-- end col -->
		@include('layouts.sidebar')
	</div>
</div>

@endsection