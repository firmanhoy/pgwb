@extends('auth.mainAuth')
@section('title','login')
@section('content')
    <div class="row">
        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
        <div class="col-lg-6">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                </div>
                @if (count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="user" action="{{ route('login.auth') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input name="email" type="email" class="form-control form-control-user"
                            id="exampleInputEmail" aria-describedby="emailHelp"
                            placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control form-control-user"
                            id="exampleInputPassword" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        masuk
                    </button>
                    {{-- <a href="index.html" class="btn btn-primary btn-user btn-block">
                        Login
                    </a> --}}
                    <hr>
                </form>
                <hr>
                <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                </div>
                <div class="text-center">
                    <a class="small" href="/register">Create an Account!</a>
                </div>
            </div>
        </div>
    </div>
@endsection