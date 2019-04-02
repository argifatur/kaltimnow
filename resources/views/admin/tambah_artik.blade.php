@extends('layouts.admin')
@section('content')


<div class="container-fluid">
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-lg">Tambah Post</h6>
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
						<form class="form-horizontal" action="{{ route('addpost') }}" method="POST" enctype="multipart/form-data">
							{{ csrf_field() }}

							<div class="form-group"> 
								<label for="judul_dauroh" class="col-sm-2 control-label" required value="{{ old('judul') }}">Judul</label> 
								<div class="col-md-12">
									<input type="text" class="form-control input-main" name="judul" placeholder="" value="{{ old('judul') }}" required autofocus> 
								</div> 
							</div>

							<div class="form-group"> 
								<label for="judul_dauroh" class="col-sm-2 control-label" required value="{{ old('tag') }}">Tag</label> 
								<div class="col-md-12">
									<input type="text" class="form-control input-main" name="tag" placeholder="" value="{{ old('tag') }}" required autofocus> 
								</div> 
							</div>
							<div>
								<br>
							</div>
							<div class="form-group"> 
								<label for="judul_dauroh" name="" class="col-sm-2 control-label">Kategori*</label> 
								<div class="col-md-12">
									<div class="col-12 main-cat ">
										<input type="checkbox" name="kategori[]" value="Nasional"> Nasional
										<input type="checkbox" name="kategori[]" value="Edukasi"> Edukasi
										<input type="checkbox" name="kategori[]" value="Ekonomi"> Ekonomi
										<input type="checkbox" name="kategori[]" value="Teknologi"> Teknologi
										<input type="checkbox" name="kategori[]" value="Olahraga"> Olahraga
										<input type="checkbox" name="kategori[]" value="Health"> Health
										<input type="checkbox" name="kategori[]" value="Otomotif"> Otomotif
										<input type="checkbox" name="kategori[]" value="Teknologi"> Teknologi
									</div>
								</div> 
							</div>								
														
							<div class="form-group"> 
								<label for="konten_dauroh" class="col-sm-2 control-label">Konten</label> 
								<div class="col-md-12">
									<div class="col-md-12"><textarea name="isi" id="addPost">{{ old('isi') }}</textarea></div>
								</div> 
							</div>
							<div class="form-group"> 
								<label for="gambar_dauroh" class=" col-sm-2 control-label">Gambar</label> 
								<div class="col-sm-12">
									<img id="preview" src="" class="img-responsive" style="margin-bottom: 1rem; max-width: 250px;">
									<input class="col-8 input-main" type="file" name="foto" placeholder="Gambar" required autofocus>
								</div> 
							</div>
							<input class="col-2 submit-main" style="border-radius: 5px" type="submit" value="Tambah Artikel">
						</form> 
					</div>
				</div>
			</div> 
		</div>
	</div>
</div>

</div>





@endsection