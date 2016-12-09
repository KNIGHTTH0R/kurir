@extends('layout.main')

@section('vendorcss')
    @parent
    <link href="{{ elixir('css/dashboard.css') }}" rel="stylesheet">
@endsection

@section('vendorjs')
    @parent
    <script type="text/javascript" src="{{ elixir('js/dashboard.js') }}"></script>
@endsection