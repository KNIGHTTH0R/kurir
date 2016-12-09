@extends('layout.main')

@section('vendorcss')
    @parent
    <link href="{{ elixir('css/login.css') }}" rel="stylesheet">
@endsection

@section('vendorjs')
    @parent
    <script type="text/javascript" src="{{ elixir('js/login.js') }}"></script>
@endsection