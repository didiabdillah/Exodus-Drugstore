@extends('../templates/landing_main')

@section('title', 'Checkout')

@section('page')
<section class="konfirmasi mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="mb-3 text-center">
                    <h4 class="mb-5">Transaction Successfully </h4>
                    Your Order Code : <b></b><br>
                    Total <b class="text-danger">Rp. </b><br>
                    <br>
                </div>

                <div class="mb-3">
                    <p class="text-center">
                    Please Transfer Money <b>Rp. </b> To The Account Below : <br>
                    </p>
                </div>

                <div class="col-md-10 mx-auto text-center">
                    <table class='table table-borderless table-sm'>
                        <thead>
                            <tr>
                                <th>Name Bank</th>
                                <th>No Rekening</th>
                                <th>In The Name Of</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>BRI</td>
                                <td>1234567890</td>
                                <td>Exodus Drugstore</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <hr>
                <p class="mt-2 mb-2 text-center">
                Please Confirm Your Payment <a href="{{url('/konfirmasi')}}" class="btn btn-success"><strong>Here</strong></a>.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection