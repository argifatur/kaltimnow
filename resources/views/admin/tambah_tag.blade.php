@extends('layouts.admin')
@section('content')


<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-lg">Tambah Tag</h6>
    </div>

    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <div class="panel-body">
            <form class="form-horizontal" action="{{ route('addtag') }}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}

              <div class="form-group"> 
                <label for="judul_dauroh" class="col-sm-2 control-label" required value="{{ old('title') }}">Title</label> 
                <div class="col-md-12">
                  <input type="text" class="form-control input-main" name="title" placeholder="" value="{{ old('title') }}" required autofocus> 
                </div> 
          
               <!--  <label for="judul_dauroh" class="col-sm-2 control-label" required value="{{ old('count') }}">Count</label> 
                <div class="col-md-12">
                  <input type="text" class="form-control input-main" name="count" placeholder="" value="{{ old('count') }}" required autofocus> 
                </div>  -->
              </div>
              <input class="col-12 submit-main" type="submit" value="Tambah Tag">
            </form> 
          </div>
        </div>
      </div> 
    </div>
  </div>
</div>

</div>





@endsection