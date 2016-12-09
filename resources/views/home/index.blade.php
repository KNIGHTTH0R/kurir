@extends('layout.main')

@section('vendorcss')
    @parent
    <link href="{{ elixir('css/home.css') }}" rel="stylesheet">
@endsection

@section('vendorjs')
    @parent
    <script type="text/javascript" src="{{ elixir('js/home.js') }}"></script>
@endsection