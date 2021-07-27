@extends('partials.nav2')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">Data Siswa</li>
            </ol>
          </nav>
          <div class="card" style="padding-right: 20px;">
              <div class="card-body">
                  <div class="col-md-4 mb-4">
                      <a href="" class="btn btn-outline-primary btn-md">Tambah Data</a>
                  </div>
                  <div class="row">
                      <div class="col-md-3 ml-3">
                          <div class="form-group">
                              <input type="text" class="form-control">
                          </div>
                      </div>
                      <div class="col-md-3 ml-3">
                        <div class="form-group">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <a href="" class="btn btn-outline-primary btn-md"> Cari Data</a>
                        </div>
                    </div>
                  </div>
                  <table class="table text-center ml-3">
                    <thead  style=" border:1px solid #dedad9;">
                        <tr>
                            <th>NISN</th>
                            <th>Nama Lengkap</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Status</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>012983</td>
                            <td>Juki</td>
                            <td>12</td>
                            <td>RPL</td>
                            <td>Aktif</td>

                            <td>
                                <a href="" class="btn btn-outline-warning btn-sm mr-2" style="width: 5rem; border-radius: 8px;">Edit</a>
                                <a href="" class="btn btn-outline-danger btn-sm"style="width: 5rem; border-radius: 8px;">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                  </table>
              </div>
          </div>
    </div>
@endsection