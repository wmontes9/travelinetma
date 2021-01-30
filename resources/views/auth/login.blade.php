@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div id="form-login">
                 <form method="POST" action="{{ route('login') }}" >
                        @csrf 
                        <div class="logo" style="width: 130px;display: block;margin: 10px auto">
                            <img src="{{ url('img/logo.png') }}" alt="" style="width: 100%">
                        </div>
                        <div class="form-group row">
                            <span>Correo</span>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group row">
                            <span>Contraseña</span>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group row">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Recuperar contraseña
                                    </label>
                                </div>
                        </div>

                        <div class="form-group row mb-0">
                                <button type="submit" class="btn btn-block btn-outline-success">
                                    Acceder
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Recuperar acceso
                                    </a>
                                @endif
                        </div>
                    </form>
            </div>
    </div>
</div>


<style>
    #form-login {
    border: 1px #00800033 dashed;
    margin: 162px 0 100px 0;
    background: #f3f3f3;
    padding: 70px 0;
    box-shadow: 0px 6px 14px 1px #0000003b;
}

    #form-login h1 {
    border-left: 5px #028c11 solid;
    padding-left: 10px;
    height: 37px;
    font-size: 37px
}
    #form-login form {
    padding: 10px 60px 2px 60px;
    display: block;
    width: 430px;
}
.form-control {
    height: 45px;
    border-radius: 0;
}

.btn-outline-success {
    background: white;
    /* background: #000; */
    border: 1px green solid;
    padding: 10px 0;
    color: green;
}
</style>
@endsection
