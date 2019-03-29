@extends('layouts.admin')
@section('content')

<div id="content-wrapper" class="d-flex flex-column">

  <div id="content">

    <div class="container-fluid">              
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-lg ">Daftar Artikel</h6>
        </div>
        <div class="col-8">{{ Session::get('msg') }}</div>

        <div class="card-body">
          <div class="table-responsive">
            <p>
              <a class="btn btn-primary" href="{{route('tambah_artik') }}"><span class="fa fa-plus"></span> Tambah</a> 
            </p>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Judul | Kategori</th>
                  <th>Isi</th>
                  <th>Tanggal Dibuat</th>
                  <th>Gambar</th>
                  <th>Konten</th>
                  <th>Tindakan</th>
                </tr>
              </thead>
              @foreach ($beritas as $berita)
              <tbody>
                <tr>
                  <td><?php echo $berita->id ?></td>
                  <td><a href="berita/{{ $berita->path }}" class="col-12 sub-title-news">{{ $berita->judul }} |<?php $controller->kategori($berita->kategori); ?></a></td>
                  <td>{{ $berita->path }}</td>
                  <td><?php $controller->tanggal($berita->created_at); ?></td>
                  <td><img src="public/img/{{ $berita->foto }}" style="height: 170px; width: 170px;" ></td>
                  <td></td>
                  <td><div class="btn-group">
                    <a href="{{route('edit', $berita->id) }}" class="btn btn-primary" href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i><br>Ubah</a>
                    <a href="hapus/{{ $berita->id }}" class="btn btn-danger" href="" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="fa fa-trash"></i><br>Hapus</a>
                  </div></td>
                </tr>
              </tbody>
              @endforeach

            </table>
            {{ $beritas->links() }}

          </div>
        </div>
      </div>

    </div>
  </div>
</div>



@endsection