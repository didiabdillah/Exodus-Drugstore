@extends('../templates/admin_main')

@section('title', 'Data Transaksi')

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
                <div class="flash-data" data-flashdata="this->session->flashdata('flash'); ?>"></div>

                <div class="table-responsive">
                    <table id="datatables" class="display table table-bordered table-striped table-hover" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Transaksi</th>
                                <th>Pembeli</th>
                                <th>Tanggal Pesan</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                            <td>
                                <a href="{{ url ('/transaction/1')}}" class="btn btn-success  btn-sm">Detail</a>
                            </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>

@endsection