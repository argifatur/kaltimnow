 @extends('layouts.template')
 @section('content')
 
 <div class="main-container container" id="main-container">

  <!-- Content -->
  <div class="row">
    @foreach ($halaman as $halaman)
    <!-- post content -->
    <div class="col-lg-12 blog__content mb-30">          
      <div class="row">
        <div class="col-md-12 mb-30">
          <h2>{{ $halaman->judul }}</h2>
          <hr>
          <?php $isi = $halaman->isi; ?>
          <p class="lead mb-20">{!! $isi !!}</p>
        </div>
        <div class="col-md-6">
          <img data-src="public/img/{{ $halaman->foto }}" src="public/img/{{ $halaman->foto }}" class="entry__img lazyload" alt="" />          
        </div>
      </div>
    </div> <!-- end col -->
    @endforeach 
  </div> <!-- end content -->
</div> <!-- end main container -->
@endsection