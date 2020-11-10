@extends('../templates/auth_main')

@section('title', 'Forgot Password')

@section('page')
<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="{{  url('/') }}">
                    <font color="white">
                    <h1 class="align-content">Exodus Drugstore</h1></font>
                </a>
            </div>
            <div class="login-form">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                    <button type="submit" class="btn btn-primary btn-flat m-b-15">Submit</button>

                </form>
                <div class="register-link m-t-15 text-center">
                    <p><a href="">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection