@extends('../templates/admin_main')

@section('title', 'Insert Delivery Services')

@section('page')
<div class="breadcrumbs">
    <div class="card">
        <div class="card-header">
            <strong>Add Data</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ url('/delivery/insert') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-2"><label for="deliservice_name class=" form-control-label">Name</label></div>
                    <div class="col-12 col-md-10">
                        <input type="text" id="nama" name="delivery_name" placeholder="Delivery Name..." class="@error('delivery_name') is-invalid @enderror form-control" value="{{old('delivery_name')}}">
                        @error('delivery_name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <!-- <div class="col-12 col-md-10">
                        <span class="help-block">Enter Nama Obat</span>
                    </div> -->
                </div>
                <div class="row form-group">
                    <div class="col col-md-2"><label for="service_name" class=" form-control-label">Service Name</label></div>
                    <div class="col-12 col-md-10">
                        <input type="text" id="harga" name="service_name" placeholder="Service Name..." class="@error('service_name') is-invalid @enderror form-control" value="{{old('service_name')}}">
                        @error('service_name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <!-- <div class="col-12 col-md-10">
                        <span class="help-block">Enter Nama Obat</span>
                    </div> -->
                </div>
                <div class="row form-group">
                    <div class="col col-md-2"><label for="service_price" class=" form-control-label">Service Price</label></div>
                    <div class="col-12 col-md-10">
                        <input type="text" id="banyak" name="service_price" placeholder="Service Price..." class="@error('service_price') is-invalid @enderror form-control" value="{{old('service_price')}}">
                        @error('service_price')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <!-- <div class=" col-12 col-md-10">
                        <span class="help-block">Enter Nama Obat</spa
                    </div> -->
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-md">
                        <i class="fa fa-dot-circle-o"></i> Save
                    </button>
                    <button type="reset" class="btn btn-danger btn-md">
                        <i class="fa fa-ban"></i> Reset
                    </button>
                </div>
            </form>
        </div>
    </div>
</div><!-- .content -->


</div><!-- /#right-panel -->

<!-- Right Panel -->
@endsection