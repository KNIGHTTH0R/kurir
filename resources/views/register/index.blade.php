@extends('layout.main')

@section('vendorcss')
    @parent
    <link href="{{ elixir('css/register.css') }}" rel="stylesheet">
@endsection

@section('vendorjs')
    @parent
    <script type="text/javascript" src="{{ elixir('js/register.js') }}"></script>
@endsection