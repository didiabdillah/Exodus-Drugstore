@extends('../templates/landing_main')

@section('title', 'Riwayat Trnsaksi')

@section('page')
<section class="produk1 mt-5">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-9">
                <div class="row">
                    <div class="col">
                        <h4>Riwayat Transaksi</h4>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <table class="display table table-bordered table-striped" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kode Pesanan</th>
                                    <th>Tanggal beli</th>
                                    <th>Total Bayar</th>
                                    <th>Status</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                    <tr>
                                        <td>
                                            <h6 class="mt-2"></h6>
                                        </td>
                                        <td>
                                            <h6 class="mt-2"></h6>
                                        </td>
                                        <td>
                                            <h6 class="mt-2"></h6>
                                        </td>
                                        <td>
                                            <h6 class="mt-2">Rp. </h6>
                                        </td>
                                        <td>
                                            

                                        </td>
                                        <td>
                                            <a href="{{ url ('/transaksi/2')}}" class="btn btn-info">Detail</a>
                                        </td>
                                    </tr>
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection