@extends('../templates/auth_main')

@section('title', 'Login')

@section('page')
<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="{{  url('/') }}">
                    <font color="white">
                        <h1 class="align-content">Monitoring Creator Editor</h1>
                    </font>
                </a>
            </div>
            <div class="login-form">
                @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif
                <form action="{{  url('/login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Username/Email address</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Username/Email" name="email" value="{{old('email')}}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control @error('user_password') is-invalid @enderror" placeholder="Password" name="user_password" value="{{old('user_password')}}">
                        @error('user_password')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <!-- <div class="checkbox">
                        <label class="pull-right">
                            <a href="{{  url('/forgot') }}">Forgotten Password?</a>
                        </label>

                    </div> -->
                    <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>


                </form>
            </div>
        </div>
    </div>
</div>
@endsection