@extends('layout.main')

@section('content')
    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="clearfix">
            <div class="col-lg-4 col-md-12">
                <h4><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Place</h4>
                <p>Place your item by customer</p>
            </div>
            <div class="col-lg-4 col-md-12">
                <h4><span class="glyphicon glyphicon-hand-down" aria-hidden="true"></span> Pickup</h4>
                <p>Pickup nearest item by Kurir</p>
            </div>
            <div class="col-lg-4 col-md-12">
                <h4><span class="glyphicon glyphicon-send" aria-hidden="true"></span> Delivered</h4>
                <p>Deliver customer item to receiver by kurir</p>
            </div>
        </div>
    </div>
    <p class="text-center">
        Start Now, <a href="{{ route('register') }}">daftar</a> sebagai kurir atau customer.
    </p>
@endsection