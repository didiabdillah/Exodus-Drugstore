@extends('../templates/landing_main')

@section('title', 'Checkout')

@section('page')
<div class="container mt-5">
    <h3 style="font-weight: bold;">Konfirmasi Pembayaran</h3>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">

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
</div>

@endsection