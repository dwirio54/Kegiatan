@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Tambah Data Kegiatan</li> 
               </ol>
             </nav>

             <div class="card">
                 <div class="card-body">
                     <div class="alert alert-primary" role="alert">
                         <h3>Perhatian !!!</h3>
                            Silahkan isi dibawah ini dengan benar.
                     </div>

                     <form action="" method="post">
                         @csrf

                         <div class="row">
                             <div class="col-md-3">
                                 <div class="form-group">
                                     <label for="">Kode Kegiatan</label>
                                     <input type="text" name="kode_kegiatan" class="form-control" id="" value="kode kegiatan">
                                 </div>
                             </div>
                             <div class="col-md-3">
                                 <div class="form-group">
                                     <label for="">Kode Kegiatan</label>
                                     <input type="text" name="judul" class="form-control" id="" value="judul kegiatan">
                                 </div>
                             </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">image</label>
                                        <input type="file" name="image" class="form-control" id="" >
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">IDR</label>
                                        <input type="text" name="idr" class="form-control" id="" >
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Silahkan Pilih Status</option>
                                            <option value="Aktif">Aktif</option>
                                            <option value="Non-Aktif">Non-Aktif</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Keteranan</label>
                                        <input type="text" name="keterangan" class="form-control" id="" >
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Tanggal Mulai</label>
                                        <input type="date" name="tgl_mulai" class="form-control" id="" >
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Tanggal Selesai</label>
                                        <input type="date" name="tgl_selesai" class="form-control" id="" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-info">Simpan</button>
                                </div>
                         </div>
                     </form>
                 </div>
             </div>
    </div>
@endsection