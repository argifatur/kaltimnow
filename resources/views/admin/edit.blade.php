@extends('layouts.admin')
@section('content')

<div class="container-fluid">
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-lg">Edit Post</h6>
		</div>
		@if(count($errors) > 0)
		@foreach($errors->all() as $error)
		<div class="col-8">{{ $error }}</div>
		@endforeach
		@endif
		<div class="col-8">{{ Session::get('msg') }}</div>

		<div class="card-body">
			<div class="row">
				<div class="col-md-12">
					<div class="panel-body">
						<form class="form-horizontal" action="{{route('editpost', $berita->id) }}" method="POST" enctype="multipart/form-data"">
							{{ csrf_field() }}

							<div class="form-group"> 
								<label for="judul_dauroh" class="col-sm-2 control-label" required value="{{ $berita->judul }}">Judul</label> 
								<div class="col-md-12">
									<input type="text" class="form-control input-main" name="judul" placeholder="Judul Artikel" value="{{ $berita->judul }}" required> 
								</div> 
							</div>	

							<div class="form-group"> 
								<label for="judul_dauroh" class="col-sm-2 control-label" required value="{{ $berita->tag }}">Tag</label> 
								<div class="col-md-12">
									<input type="text" class="form-control input-main" name="tag" placeholder="Tag Artikel" value="{{ $berita->tag }}" required> 
								</div> 
							</div>
							<div class="form-group"> 
								<label for="judul_dauroh" name="" class="col-sm-2 control-label">Kategori</label> 
								<?php function cek($cat, $berita){if(strpos($berita->kategori, $cat) !== false) echo 'checked';} ?>
								<div class="col-12 main-cat">
									<input type="checkbox" name="kategori[]" value="Nasional"<?php cek('Nasional', $berita); ?>>Nasional
									<input type="checkbox" name="kategori[]" value="Edukasi"<?php cek('Edukasi', $berita); ?>>Edukasi
									<input type="checkbox" name="kategori[]" value="Ekonomi"<?php cek('Ekonomi', $berita); ?>>Ekonomi
									<input type="checkbox" name="kategori[]" value="Teknologi"<?php cek('Teknologi', $berita); ?>>Teknologi
									<input type="checkbox" name="kategori[]" value="Olahraga"<?php cek('Olahraga', $berita); ?>>Olahraga
									<input type="checkbox" name="kategori[]" value="Health"<?php cek('Health', $berita); ?>>Health
									<input type="checkbox" name="kategori[]" value="Otomotif"<?php cek('Otomotif', $berita); ?>>Otomotif
								</div>

							</div>
							<div class="form-group"> 
								<label for="konten_dauroh" class="col-sm-2 control-label">Konten</label> 
								<div class="col-md-12">
									<div class="col-md-12"><textarea name="isi" id="addPost">{{ $berita->isi }}</textarea></div>
								</div> 
							</div>
							<div class="form-group"> 
								<label for="gambar_dauroh" class=" col-sm-2 control-label">Gambar</label> 
								<div class="col-sm-12">
									<img id="preview" src="" class="img-responsive" style="margin-bottom: 1rem; max-width: 250px;">
									<input type="file" name="foto" placeholder="Gambar" >
								</div> 
							</div>
							<input class="col-12 submit-main" type="submit" value="Edit Artikel">
						</form> 
					</div>
				</div>
			</div> 
		</div>
	</div>
</div>

</div>



@endsection