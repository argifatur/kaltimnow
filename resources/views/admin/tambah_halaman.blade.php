@extends('layouts.admin')
@section('content')


<div class="container-fluid">
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-lg">Tambah Halaman</h6>
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
						<form class="form-horizontal" action="{{ route('addhalaman') }}" method="POST" enctype="multipart/form-data">
							{{ csrf_field() }}

							<div class="form-group"> 
								<label for="judul_dauroh" class="col-sm-2 control-label" required value="{{ old('judul') }}">Judul</label> 
								<div class="col-md-12">
									<input type="text" class="form-control input-main" name="judul" placeholder="" value="{{ old('judul') }}" required autofocus> 
								</div> 
							</div>

									
														
							<div class="form-group"> 
								<label for="konten_dauroh" class="col-sm-2 control-label">Konten</label> 
								<div class="col-md-12">
									<div class="col-md-12"><textarea name="isi" id="addPost">{{ old('isi') }}</textarea></div>
								</div> 
							</div>
							<div class="form-group"> 
								<label for="gambar_dauroh" class=" col-sm-2 control-label required">Gambar</label> 
								<div class="col-sm-12">
									<img id="preview" src="" class="img-responsive" style="margin-bottom: 1rem; max-width: 250px;">
									<input class="col-8 input-main" type="file" name="foto" placeholder="Gambar" required autofocus>
								</div> 
							</div>
							<input class="col-12 submit-main" type="submit" value="Tambah Artikel">
						</form> 
					</div>
				</div>
			</div> 
		</div>
	</div>
</div>

</div>





@endsection