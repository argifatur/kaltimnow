@extends('layouts.admin')
@section('content')

<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-lg ">Semua Tag</h6>
    </div>
    @if(count($errors) > 0)
    @foreach($errors->all() as $error)
    <div class="col-8">{{ $error }}</div>
    @endforeach
    @endif
    <div class="col-8">{{ Session::get('msg') }}</div>

    <div class="card-body">
      <div class="table-responsive">
         <p>
          <a class="btn btn-primary" href="{{route('tambah_tag') }}"><span class="fa fa-plus"></span> Tambah</a> 
        </p>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama</th>
              <th>Tindakan</th>
            </tr>
          </thead>
          @foreach ($tag as $t)
          <tbody>
            <tr>
              <td>{{ $t->id_tag }}</td>
              <td>{{ $t->title }}</td>
              <td><div class="btn-group-sm">
                <a class="btn btn-primary" href="{{route('edit_tag', $t->id_tag) }}"><span class="glyphicon glyphicon-pencil"></span> Ubah</a>
                <a class="btn btn-danger" href="hapus_tag/{{ $t->id_tag }}" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><span class="glyphicon glyphicon-trash"></span>Hapus</a>
              </div></td>
            </tr>
          </tbody>
          @endforeach
        </table>
                  {{ $tag->links() }}

      </div>
    </div>
  </div>

</div>



@endsection