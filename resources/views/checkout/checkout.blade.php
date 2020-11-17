@extends('../templates/landing_main')

@section('title', 'Checkout')

@section('page')
<section class="checkout mt-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Checkout</h2>
            </div>
        </div>
        <div class="row mt-3" style="border-bottom: 2px solid #e6eaee">
            <div class="col">
                <h4>Alamat Pengiriman</h4>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-8">

                <h6><strong>nama</strong></h6>
                <h6>telephone</h6>
                <h6>alamat</h6>
                <a href="" data-toggle="modal" data-target="#ubahAlamat">Ubah Alamat</a>
            </div>
        </div>
    </div>

</section>

<section class="keranjang">
    <div class="container">
        <div class="row" style="border-bottom: 2px solid #e6eaee">
            <div class="col">
                <h4>Konfirmasi Pesanan</h4>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-8">
            <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">Image</th>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-total">Total</th>
                                <th class="product-total">Status</th>
                                <th class="product-remove">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            <tr>
                                <td class="product-thumbnail">
                                    <img src="" alt="Image" class="img-fluid">
                                </td>
                                <td class="product-name">
                                    <h2 class="h5 text-black"></h2>
                                </td>
                                <td>Rp. </td>
                                <td></td>
                                <td>Rp. </td>
                                <td></td>
                                <td>
                                    <form action="{{url('cart/')}}" method="post">
                                        
                                        <input type="hidden" name="cart_id" value="">
                                        <button onClick="return confirm('anda yakin ingin menghapus item');" class="btn btn-primary height-auto btn-sm">X</button>
                                    </form>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
            </div>
        </div>

        <input type="hidden" id="totalberat" name="totalberat" value="">
        <input type="hidden" name="tujuan" id="tujuan" value="" />
        <input type="hidden" name="asal" id="asal" value="149" />
        <input type="hidden" name="total" id="total" value="" />

        <div class="row mt-3 mb-3">
            <div class="col-md-6">
                <div class="card w-100 shadow mb-2 bg-white rounded">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="ekspedisi">Ekspedisi</label>
                                    <select onchange="get_ongkir()" class="kurir form-control" id="ekspedisi" name="ekspedisi">
                                        <option>Pilih Ekspedisi</option>
                                        <!-- <?php
                                        // $eks = ['jne' => 'JNE', 'pos' => 'POS', 'tiki' => 'TIKI'];
                                        // foreach ($eks as $key => $value) {
                                            // echo "<option value='$key'> $value </option>";
                                        // }
                                        // ?> -->
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="service">Service</label>
                            <select onchange="hitungtotal()" name="service" id="service" class="form-control">

                            </select>
                        </div>
                        <!-- <div class="row mt-2" id="kuririnfo" style="display: none">
                            <div class="col"></div>
                            <div class="col pt-2" id="kurirserviceinfo">

                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Ringkasan Belanja
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                Total Harga
                            </div>
                            <div class="col">
                                <b>Rp.  </b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                Ongkos Kirim
                            </div>
                            <div class="col">
                                <b id="ongkoskirim">Rp. 0</b>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                Total Bayar
                            </div>
                            <div class="col">
                                <b id="totalbayar">Rp. </b>
                            </div>
                        </div>
                        
                            <form action="{{url('/invoice')}}" method="POST">
                                <input type="hidden" id="notrans" name="notrans" value="">
                                <input type="hidden" id="id_user" name="id_user" value="">
                                <input type="hidden" id="id_alamat" name="id_alamat" value="">
                                <input type="hidden" name="ongkir" id="ongkir" value="0" />
                                <input type="hidden" name="bayar" id="bayar" value="0" />
                                <button type="submit" name="btnsimpan" id="btnsimpan" class="btn btn-warning btn-block" style='display:none'>Buat Pesanan</button>
                            </form>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="ubahAlamat" tabindex="-1" role="dialog" aria-labelledby="ubahAlamat" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewMenuLabel">Ubah Alamat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('/checkout')}}" method="POST">
                <div class="modal-body">
                    <input type="hidden" id="id" name="id_user" value="">
                    <input type="hidden" id="id" name="id_alamat" value="">
                    <div class="form-group">
                        <label for="alamat">Alamat <b class="text-danger">*</b></label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="2"></textarea>
                        
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="number" class="form-control" id="telepon" name="telepon" value="">
                        
                    </div>
                    <div class="form-group">
                        <label for="kota">Kota <b class="text-danger">*</b></label>
                        <select name="kota" id="kota" class="form-control">
                           
                        </select>
                       
                    </div>
                    <div class="form-group">
                        <label for="provinsi">Provinsi <b class="text-danger">*</b></label>
                        <select name="provinsi" id="provinsi" class="form-control">
                           
                        </select>
                        
                    </div>
                    <div class="form-group">
                        <label for="kodepos">Kode Pos</label>
                        <input type="number" class="form-control" id="kodepos" name="kodepos" value="">
                       
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection