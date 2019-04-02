@extends('layouts.admin')
@section('content')


<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-lg">Tambah Kategori</h6>
    </div>

    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <div class="panel-body">
            <form class="form-horizontal" action="{{ route('addkat') }}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}

              <div class="form-group"> 
                <label for="judul_dauroh" class="col-sm-2 control-label" required value="{{ old('judul_kategori') }}">Judul</label> 
                <div class="col-md-12">
                  <input type="text" class="form-control input-main" name="judul_kategori" placeholder="" value="{{ old('judul_kategori') }}" required autofocus> 
                </div> 
              </div>
              <input class="col-2 submit-main" style="border-radius: 5px" type="submit" value="Tambah Kategori">
            </form> 
          </div>
        </div>
      </div> 
    </div>
  </div>
</div>

</div>





@endsection