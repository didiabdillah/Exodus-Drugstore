@extends('../templates/admin_main')

@section('title', 'Delivery Services')

@section('page')
<div class="breadcrumbs">
    <div class="container" style="margin-top: 20px;">

        <a href="{{  url('/delivery/insert') }}"><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> ADD</button></a>
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
                            <table id="bootstrap-data-table-export" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NAME</th>
                                        <th>SERVICE</th>
                                        <th>PRICE</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($delivery as $row)

                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$row->delivery_name}}</td>
                                        <td>{{$row->service_name}}</td>
                                        <td>Rp. {{$row->service_price}}</td>

                                        <td>
                                            <a href="{{url('delivery/edit/' . $row->id)}}" class="btn btn-warning m-l-10 m-b-10">Edit</a>

                                            <form action="{{url('delivery/' . $row->id)}}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button onClick="return confirm('anda yakin ingin menghapus data');" class="btn btn-danger m-l-10 m-b-10">Delete</button>
                                            </form>
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