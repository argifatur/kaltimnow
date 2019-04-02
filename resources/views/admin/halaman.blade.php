@extends('layouts.admin')
@section('content')

<div id="content-wrapper" class="d-flex flex-column">

  <div id="content">

    <div class="container-fluid">              
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-lg ">Daftar Halaman</h6>
        </div>
        <div class="col-8">{{ Session::get('msg') }}</div>

        <div class="card-body">
          <div class="table-responsive">
            <p>
              <a class="btn btn-primary" href="{{route('tambah_halaman') }}"><span class="fa fa-plus"></span> Tambah</a> 
            </p>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <tr style="text-align: center;">
                  <th>#</th>
                  <th>Judul</th>
                  <th>Isi</th>
                  <th>Tanggal Dibuat</th>
                  <th>Gambar</th>
                  <th>Tindakan</th>
                </tr>
              </thead>
              @foreach ($halaman as $halaman)
              <tbody>
                <tr style="text-align: center;">
                  <td><?php echo $halaman->id?></td>
                  <td>{{ $halaman->judul }}</td>
                  <?php $isi = (strlen($halaman->isi) > 200) ? substr($halaman->isi, 0, 200) . "..." : $halaman->isi; ?>
                  <td>{!! $isi !!}</td>
                  <td><?php $controller->tanggal($halaman->created_at); ?></td>
                  <td><img src="public/img/{{ $halaman->foto }}" style="height: 170px; width: 170px;" ></td>
                  <td><div class="btn-group">
                    <a href="{{route('edit_halaman', $halaman->id) }}" class="btn btn-primary" href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    <a href="hapus_halaman/{{ $halaman->id }}" class="btn btn-danger" href="" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="fa fa-trash"></i></a>
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