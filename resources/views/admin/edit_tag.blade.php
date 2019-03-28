@extends('layouts.admin')
@section('content')


<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-lg">Edit kategori</h6>
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
            <form method="post" action="{{route('edittag', $tag->id_tag) }}" autocomplete="off">
              {{ csrf_field() }}

              <div class="row">
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="tab-content">
                    <div class="tab-pane active" id="tab-content-1">
                      <div class="form-group">
                        <label for="judul_dauroh" class="col-sm-2 control-label" required value="{{ $tag->title }}">Tag</label>                                         
                       <input type="text" class="form-control input-main" name="title" placeholder="Judul Tag" value="{{ $tag->title }}" required> 
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
                    <button type="reset" class="btn btn-danger pull-right" onclick="self.history.back()"><i class="fa fa-times"></i> Batal</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection