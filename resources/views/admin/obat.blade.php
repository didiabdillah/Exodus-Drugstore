@extends('../templates/admin_main')

@section('title', 'Data Obat')

@section('page')
<div class="breadcrumbs">
    <div class="container" style="margin-top: 20px;">

        <a href="{{  url('/drug/insert') }}"><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> ADD</button></a>
        <hr>

    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <center><strong class="card-title">DATA</strong></center>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>NAME</th>
                                        <th>PRICE</th>
                                        <th>STOCK</th>
                                        <th>IMAGE</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($drugs as $row)
                                    <tr>
                                        <td>{{$row->drug_name}}</td>
                                        <td>{{$row->drug_price}}</td>
                                        <td>{{$row->drug_stock}}</td>
                                        <td>{{$row->drug_image}}</td>
                                        <td>
                                            <a href="{{url('drug/edit/' . $row->drug_id)}}" class="btn btn-warning m-l-10 m-b-10">Edit</a>

                                            <a onClick="return confirm('anda yakin ingin menghapus data');" href="{{url('drug/destroy/' . $row->drug_id)}}" class="btn btn-danger m-l-10 m-b-10">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->


</div><!-- /#right-panel -->

<!-- Right Panel -->

@endsection