@extends('layouts.template')
@section('content')
<!-- Search -->
<div class="main-container container" id="main-container">

  <!-- Content -->
  <div class="row">

    <!-- post content -->
    <div class="col-lg-8 blog__content mb-30">
      <form class="search-form mb-20">
        <input type="text" placeholder="Search an article" class="search-input">
        <button type="submit" class="search-button btn btn-lg btn-color btn-button">
          <i class="ui-search search-icon"></i>
        </button>
      </form>
      @foreach ($beritaBaru as $berita)
      <article class="entry post-list">

        <div class="entry__img-holder post-list__img-holder">
          <a href="single-post.html">
            <div class="thumb-container thumb-75">
              <img data-src="public/img/{{ $berita->foto }}" src="public/img/{{ $berita->foto }}" class="entry__img lazyload" alt="" />
            </div>
          </a>
        </div>

        <div class="entry__body post-list__body">
          <div class="entry__header">
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
          </div>
          <div class="entry__excerpt">
            <?php $isi = (strlen($berita->isi) > 200) ? substr($berita->isi, 0, 200) . "..." : $berita->isi; ?>
            <p>{!! $isi !!} <a href="{{ route('post') }}">Readmore</a></p>
          </div>
        </div>

      </article>
      @endforeach 

     
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