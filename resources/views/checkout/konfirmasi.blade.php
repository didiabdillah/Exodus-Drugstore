
@extends('../templates/landing_main')

@section('title', 'Checkout')

@section('page')
<div class="container mt-3">
    <h3 style="font-weight: bold;">Konfirmasi Pembayaran</h3>
  
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-5">
                   
                    <div class="form-group">
                        <label for="kode">Kode Pesanan</label>
                        <input type="text" class="form-control" id="kode" name="kode" autocomplete="off">
                        <small>* Untuk kode pesanan, anda bisa melihatnya <a href="">disini</a></small>
                        <br>
                       
                    </div>
                    <div class="form-group">
                        <label for="bukti">Bukti Pembayaran</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="bukti" name="bukti" required>
                            <small>* Silahkan pilih file dengan format <b class="text-danger">jpg/png</b>, ukuran maksimal <b class="text-danger">2 mb</b></small>
                            <label class="custom-file-label" for="bukti">Pilih file</label>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-info btn-block mt-4" name="submit" value="Konfirmasi">
                    <!-- <button type="submit" class="btn btn-info btn-block mt-4">Konfirmasi</button> -->
                </div>
            </div>
        </form>
    
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-5">
                    
                    <div class="form-group">
                        <label for="kode">Kode Pesanan</label>
                        <input type="text" class="form-control" id="kode" name="kode">
                        <small>* Untuk kode pesanan, anda bisa melihatnya <a href="" data-toggle="modal" data-target="#login">disini</a></small>
            
                    </div>
                    <div class="form-group">
                        <label for="bukti">Bukti Pembayaran</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="bukti" name="bukti" required>
                            <small>* Silahkan pilih file dengan format <b class="text-danger">jpg/png</b>, ukuran maksimal <b class="text-danger">2 mb</b></small>
                            <label class="custom-file-label" for="bukti">Pilih file</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info btn-block mt-4">Konfirmasi</button>
                </div>
            </div>
        </form>
  
</div>


<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewMenuLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="user" method="post" action="">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="email" placeholder="Enter Email Address..." name="email" value="">
                       
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                       
                    </div>
                    <button type="submit" class="btn btn-info btn-user btn-block">
                        Login
                    </button>
                </div>
            </form>
            <hr>
            <div class="text-center mb-3">
                <a class="small" href="">Daftar Akun?</a>
            </div>
        </div>
    </div>
</div>

@endsection