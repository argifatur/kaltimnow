@extends('layouts.admin')
@section('content')

<div id="content-wrapper" class="d-flex flex-column">

  <div id="content">

    <div class="container-fluid">              
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-lg ">Daftar Banner</h6>
        </div>
        <div class="col-8">{{ Session::get('msg') }}</div>

        <div class="card-body">
          <div class="table-responsive">
            <p>
              <a class="btn btn-primary" href="{{route('tambah_banner') }}"><span class="fa fa-plus"></span> Tambah</a> 
            </p>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <tr style="text-align: center;">
                  <th>#</th>
                  <th>Judul</th>
                  <th>Gambar (728 x 90)</th>
                  <th>Tindakan</th>
                </tr>
              </thead>
              @foreach ($banner as $banner)
              <tbody>
               <tr style="text-align: center;">
                  <td><?php echo $banner->id ?></td>
                  <td>{{ $banner->judul }}</td>
                  <td class="text-center"><img src="public/img/{{ $banner->foto }}" style="height: 90px; width: 728px;"></td>
                  <td><div class="btn-group">
                    <a href="{{route('edit_banner', $banner->id) }}" class="btn btn-primary" href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i><br></a>
                    <a href="hapus_banner/{{ $banner->id }}" class="btn btn-danger" href="" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="fa fa-trash"></i><br></a>
                  </div></td>
                </tr>
              </tbody>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection