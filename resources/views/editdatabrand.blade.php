@extends('layout.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data brand</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Data brand</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Data brand</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/brand/update/'.$brand->id) }}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama_brand" class="col-sm-2 col-form-label">Nama Brand</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_brand" placeholder="Nama Brand" value="{{ $brand->nama_brand}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang" value="{{ $brand->nama_barang}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kode_barang" class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kode_barang" placeholder="Kode Barang" value="{{ $brand->kode_barang}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="jenis" placeholder="Jenis" value="{{ $brand->jenis}}" required>
                    </div>
                  </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success float-right">Simpan</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection