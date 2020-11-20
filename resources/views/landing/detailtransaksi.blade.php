@extends('../templates/landing_main')

@section('title', 'Detail Produk')

@section('page')
<div class="container mt-3">
    
        <div class="row mb-4">
            <div class="col-md-8">
                <div class="alert alert-info" role="alert">
                If the item has arrived, Please confirm by pressing this button
                    <a href="" class="btn btn-info">Confirmation</a>
                </div>

            </div>
        </div>
  
    <div class="row">
        <div class="col-md-10">
            
            <h4>Purchase Details</h4>
            <table class="display table table-hover table-striped" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Total</th>
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
                                <h6>Rp. </h6>
                            </td>
                            <td>
                                <h6></h6>
                            </td>
                            <td>
                                <h6>Rp. </h6>
                            </td>
                        </tr>
                   
                    <tr>
                        <td colspan="3"></td>
                        <td><b>Subtotal</b></td>
                        <td>
                            <h6>Rp. </h6>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td><b>Delivery Price</b></td>
                        <td>
                            <h6>Rp. </h6>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td><b>Total </b></td>
                        <td>
                            <h6>Rp. </h6>
                        </td>
                    </tr>
                </tbody>
            </table>
            <a href="" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>

@endsection