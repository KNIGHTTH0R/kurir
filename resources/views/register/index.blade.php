@extends('layout.main')

@section('navbar')
@endsection

@section('content')
    <div class="col-lg-offset-3 col-lg-6 col-md-12">
        <form id="form-register" method="post">
            <h2 class="form-signin-heading">Please register</h2>
            <div id="alertRegister" class="alert alert-danger" role=alert style="display: none;">
                <h4>Oh snap! You got an error!</h4>
                <p id="alertRegisterMessage"></p>
            </div>
            <div class="form-group">
                <label for="inputEmail">Email address</label>
                <input type="email" class="form-control" name="user[email]" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control" name="user[password]" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="inputConfirmPassword">Repeat Password</label>
                <input type="password" class="form-control" name="user[confirm_password]" placeholder="Repeat Password">
            </div>
            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" name="user[name]" placeholder="Fullname">
            </div>
            <div class="form-group">
                <label for="inputPhoneNumber">Phone</label>
                <input type="text" class="form-control" name="user[phone_number]" placeholder="Phone Number">
            </div>
            <div class="form-group">
                <label for="inputPhoneNumber">User Type</label>
                <select class="form-control" name="user[type]">
                    <option value="">Select</option>
                    <option value="customer">Customer</option>
                    <option value="kurir">Kurir</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block" id="registerSubmitButton" data-loading-text="Loading...">Submit</button>
        </form>
    </div>

    <div class="clearfix"></div>
    <p class="text-center" style="margin-top: 20px;">
        Sudah mempunyai akun ? Silahkan login <a href="{{ route('login') }}">di sini</a>
    </p>
@endsection