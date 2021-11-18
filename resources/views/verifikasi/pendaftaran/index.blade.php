@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Pendaftaran Ulang</li> 
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
                                     <input type="text" name="nisn" class="form-control" id="" placeholder="kode kegiatan">
                                 </div>
                             </div>
                             <div class="col-md-3">
                                 <div class="form-group">
                                     <label for="">NISN</label>
                                     <input type="text" name="nama" class="form-control" id="" placeholder="nisn pelajar">
                                 </div>
                             </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                     <input type="text" name="nama" class="form-control" id="" placeholder="isi nama pelajar">
                                    </div>
                                 </div> 
                             <div class="col-md-3">
                                 <div class="form-group">
                                     <label for="">Status Pelajar</label>
                                     <select name="status" id="" class="form-control">
                                         <option value="">Silahkan Isi Status Pelajar</option>
                                         <option value="Islam">Aktif</option>
                                         <option value="Islam">Non-Aktif</option>
                                    </select>
                                 </div>
                             </div>
                               <div class="col-md-3">
                                 <div class="form-group">
                                     <label for="">Status Pelajar</label>
                                     <select name="status" id="" class="form-control">
                                         <option value="">Silahkan Isi Status Pelajar</option>
                                         <option value="Islam">Aktif</option>
                                         <option value="Islam">Non-Aktif</option>
                                    </select>
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