
@extends('layouts.admin')
@section('content')

<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-lg "> Semua Kategori</h6>
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
          <a class="btn btn-primary" href="{{route('tambah_kat') }}"><span class="fa fa-plus"></span> Tambah</a> 
        </p>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>#</th>
              <th>Judul Kategori</th>
              <th>Aksi</th>
            </tr>
          </thead>
          @foreach ($kategori as $kat)
          <tbody>
            <tr>
              <td>{{ $kat->id }}</td>
              <td>{{ $kat->judul_kategori }}</td>
              <td><div class="btn-group-sm">
                <a class="btn btn-primary" href="{{route('edit_kat', $kat->id) }}"><span class="glyphicon glyphicon-pencil"></span> Ubah</a>
                <a class="btn btn-danger" href="hapus_kat/{{ $kat->id }}" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="fa fa-trash"></i>Hapus</a>
              </div></td>
            </tr>
          </tbody>
          @endforeach
        </table>
                 {{ $kategori->links() }}

      </div>
    </div>
  </div>

</div>


@endsection