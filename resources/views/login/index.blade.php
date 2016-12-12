@extends('layout.main')

@section('navbar')
@endsection

@section('content')
    <form class="form-signin" id="form-signin" name="form-signin" method="post">
        <div id="alertSignin" class="alert alert-danger" role=alert style="display: none;">
            <h4>Oh snap! You got an error!</h4>
            <p id="alertSigninMessage"></p>
        </div>
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit" id="signinSubmitButton" data-loading-text="Loading...">Sign in</button>
    </form>
    <p class="text-center">
        Belum mempunyai akun ? Silahkan daftar <a href="{{ route('register') }}">di sini</a>
    </p>
@endsection