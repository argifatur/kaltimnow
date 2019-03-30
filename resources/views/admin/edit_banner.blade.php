@extends('layouts.admin')
@section('content')

<div class="container-fluid">
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-lg">Edit Bannner</h6>
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
						<form class="form-horizontal" action="{{route('editbanner', $banner->id) }}" method="POST" enctype="multipart/form-data"">
							{{ csrf_field() }}

							<div class="form-group"> 
								<label for="judul_dauroh" class="col-sm-2 control-label" required value="{{ $banner->judul }}">Judul</label> 
								<div class="col-md-12">
									<input type="text" class="form-control input-main" name="judul" placeholder="Judul Banner" value="{{ $banner->judul }}" required> 
								</div> 
							</div>	

							
							<div class="form-group"> 
								<label for="gambar_dauroh" class=" col-sm-2 control-label">Gambar</label> 
								<div class="col-sm-12">
									<img id="preview" src="" class="img-responsive" style="margin-bottom: 1rem; max-width: 250px;">
									<input type="file" name="foto" placeholder="Gambar" >
								</div> 
							</div>
							<input class="col-12 submit-main" type="submit" value="Edit Banner">
						</form> 
					</div>
				</div>
			</div> 
		</div>
	</div>
</div>

</div>



@endsection