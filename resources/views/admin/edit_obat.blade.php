@extends('../templates/admin_main')

@section('title', 'Edit Data Obat')

@section('page')

<div class="breadcrumbs">
    <div class="card">
        <div class="card-header">
            <strong>Edit Data Obat</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{url('/drug/edit/' . $drug->drug_id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="row form-group">
                    <div class="col col-md-2"><label for="drug_name" class=" form-control-label">Name</label></div>
                    <div class="col-12 col-md-10">
                        <input type="text" id="nama" name="drug_name" placeholder="Nama Obat..." class="form-control" value="{{$drug->drug_name}}">

                    </div>
                    <!-- <div class="col-12 col-md-10">
                        <span class="help-block">Enter Nama Obat</span>
                    </div> -->
                </div>
                <div class="row form-group">
                    <div class="col col-md-2"><label for="drug_price" class=" form-control-label">Price</label></div>
                    <div class="col-12 col-md-10">
                        <input type="text" id="harga" name="drug_price" placeholder="Harga Obat..." class="form-control" value="{{$drug->drug_price}}">

                    </div>
                    <!-- <div class="col-12 col-md-10">
                        <span class="help-block">Enter Nama Obat</span>
                    </div> -->
                </div>
                <div class="row form-group">
                    <div class="col col-md-2"><label for="drug_stock" class=" form-control-label">Stock</label></div>
                    <div class="col-12 col-md-10">
                        <input type="text" id="banyak" name="drug_stock" placeholder="Banyak Stock Obat..." class="form-control" value="{{$drug->drug_stock}}">

                    </div>
                    <!-- <div class="col-12 col-md-10">
                        <span class="help-block">Enter Nama Obat</span>
                    </div> -->
                </div>
                <div class="row form-group">
                    <div class="col col-md-2"><label for="drug_desc" class=" form-control-label">Description</label></div>
                    <div class="col-12 col-md-10">
                        <textarea id="desc" name="drug_desc" placeholder="Deskripsi..." class="form-control">{{$drug->drug_description}}</textarea>

                    </div>
                    <!-- <div class="col-12 col-md-10">
                        <span class="help-block">Enter Nama Obat</span>
                    </div> -->
                </div>
                <div class="row form-group">
                    <div class="col col-md-2"><label for="drug_image" class=" form-control-label">Image</label></div>
                    <div class="col-12 col-md-10">
                        <input type="file" id="gambar" name="drug_image" class="form-control">
                        <img src="{{URL::asset('assets/img/etalase/' . $drug->drug_image)}}" alt="" style="width: 150px; height: 100px;">
                    </div>
                    <!-- <div class="col-12 col-md-10">
                        <span class="help-block">Enter Nama Obat</span>
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