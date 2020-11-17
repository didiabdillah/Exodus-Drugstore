@extends('../templates/auth_main')

@section('title', 'Blocked')

@section('page')
<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-form">
                <div class="page-error ">
                    <center>
                        <h1><i class="fa fa-exclamation-circle"></i> Error 403 : Akses Dilarang</h1>
                        <p>Silahkan Masuk Dengan Akun Yang Benar...</p>
                        <p><a class="btn btn-primary" href="javascript:window.history.back();">&larr; Kembali</a></p>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection