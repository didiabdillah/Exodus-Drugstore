@extends('../templates/admin_main')

@section('title', 'Edit Status')

@section('page')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"></h1>
    <div class="row">
        <div class="col-md-5">
            <form action="" method="post">
                <div class="form-group">
                    <label for="status">Status <b class="text-danger">*</b></label>
                    <select name="status" id="status" class="form-control">
                        
                    </select>
                    
                </div>
                <button type="submit" name="ubah" class="btn btn-primary mt-2">Ubah Data</button>
                <a href="" class="btn btn-danger mt-2 ml-1">Batal</a>

            </form>
        </div>
    </div>

</div>


</div>

@endsection