@extends('../templates/landing_main')

@section('title', 'Checkout')

@section('page')
<div class="container mt-5">
    <h3 style="font-weight: bold;">Payment Confirmation</h3>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">

                <div class="form-group">
                    <label for="kode">Order Code</label>
                    <input type="text" class="form-control" id="kode" name="kode" autocomplete="off">
                    <small>* For order code, You can see it <a href="">Here</a></small>
                    <br>

                </div>
                <div class="form-group">
                    <label for="bukti">Payment Receipt</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="bukti" name="bukti" required>
                        <small>* Please select a file  <b class="text-danger">jpg/png</b>, Maximum Size <b class="text-danger">2 mb</b></small>
                        <label class="custom-file-label" for="bukti">Upload File</label>
                    </div>
                </div>
                <input type="submit" class="btn btn-info btn-block mt-4" name="submit" value="Konfirmasi">
                <!-- <button type="submit" class="btn btn-info btn-block mt-4">Konfirmasi</button> -->
            </div>
        </div>
    </form>
</div>

@endsection