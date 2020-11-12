@extends('../templates/auth_main')

@section('title', 'Register')

@section('page')
<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="{{  url('/') }}">
                    <font color="white">
                        <h1 class="align-content">Exodus Drugstore</h1>
                    </font>
                </a>
            </div>
            <div class="login-form">
                <form action="{{url('/register')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nama" name="name" value="{{old('name')}}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Username" name="username" value="{{old('username')}}">
                        @error('username')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{old('email')}}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" value="{{old('password')}}">
                        @error('password')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Re-Type Password</label>
                        <input type="password" class="form-control @error('retype_password') is-invalid @enderror" placeholder="Re-Type Password" name="retype_password" value="{{old('retype_password')}}">
                        @error('retype_password')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign Up</button>

                    <div class="register-link m-t-15 text-center">
                        <p>Have account ? <a href="{{  url('/login') }}"> Sign In Here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection