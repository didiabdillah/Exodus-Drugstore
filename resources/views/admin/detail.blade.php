@extends('../templates/admin_main')

@section('title', 'Dashboard')

@section('page')
<div class="container-fluid">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="d-flex align-items-center">
                    <h5 class="m-0 font-weight-bold text-primary"></h5>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama Pemesan</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="nama" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Tanggal Pesan</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="nama" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="nama" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                
                                <input type="text" readonly class="form-control-plaintext" id="nama" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Bukti Bayar</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="nama" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <table class="display table table-hover table-striped" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Produk</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            <tr>
                                <td>
                                    <h6></h6>
                                </td>
                                <td>
                                    <h6></h6>
                                </td>
                                <td>
                                    <h6></h6>
                                </td>
                                <td>
                                    <h6></h6>
                                </td>
                                <td>
                                    <h6></h6>
                                </td>
                            </tr>
                       
                        <tr>
                            <td colspan="3"></td>
                            <td><b>Subtotal</b></td>
                            <td>
                                <h6></h6>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td><b>Ongkos Kirim</b></td>
                            <td>
                                <h6></h6>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td><b>Total Bayar</b></td>
                            <td>
                                <h6></h6>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>




</div>


</div>
@endsection