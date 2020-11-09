<div class="breadcrumbs">
    <div class="container" style="margin-top: 20px;">

        <a href=""><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> ADD</button></a>
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
                                        <th>QUANTITY</th>
                                        <th>IMAGE</th>
                                        <th></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($obat as $row) { ?>
                                        <tr>
                                            <td></td>
                                            <td>Rp. </td>
                                            <td></td>
                                            <td><img src="" alt="" style="width: 75px; height: 50px;"></td>
                                            <td>
                                                <a href="" class="btn btn-warning m-l-10 m-b-10">Edit</a>

                                                <a href="" class="btn btn-danger m-l-10 m-b-10">Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
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