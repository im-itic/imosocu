@extends('layouts.auth-base')
@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                <input type="text" class="form-control form-control-lg no-b" placeholder="Email Address"
                    id="email" type="email" name="email" :value="old('email')" required autofocus>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group has-icon"><i class="icon-user-secret"></i>
                <input type="password" class="form-control form-control-lg no-b" placeholder="Password"
                    id="password" type="password" name="password" required autocomplete="current-password">
            </div>
        </div>
        <div class="col-lg-12">
            <input type="submit" class="btn btn-success btn-lg btn-block" value="Sign In">
            <p class="forget-pass text-white">You forgot your password ? <a href="">reset here</a></p>
        </div>
    </div>
</form>
@endsection
