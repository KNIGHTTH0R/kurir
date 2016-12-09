@extends('layout.main')



@section('content')
    @include('dashboard.modal')
    <div id="alertDashboard" class="alert alert-danger" role=alert style="display: none;">
        <h4>Oh snap! You got an error!</h4>
        <p id="alertDashboardMessage"></p>
    </div>
    @if ($userType === 'customer')
        <button type="button" class="btn btn-primary btn-lg active" data-toggle="modal" data-target="#myModal" style="margin-bottom: 20px;">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>  barang
        </button>
    @endif
    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Barang</th>
                <th>Pengirim</th>
                <th>Penerima</th>
                <th>Kurir</th>
                <th>Alamat pickup</th>
                <th>Tujuan Pengiriman</th>
                <th>Status</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Barang</th>
                <th>Pengirim</th>
                <th>Penerima</th>
                <th>Kurir</th>
                <th>Alamat pickup</th>
                <th>Tujuan Pengiriman</th>
                <th>Status</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{ $item['item_name'] }}</td>
                    <td>{{ $item['sender']['name'] }}</td>
                    <td>{{ $item['receiver']['name'] }}</td>
                    <td>{{ @$item['kurir']['name'] }}</td>
                    <td>{{ $item['address']['pickup'] }}pickup</td>
                    <td>{{ $item['address']['destination'] }}Pengiriman</td>
                    <td>
                        @if (in_array($userType, ['customer', 'admin']) && $item['status'] === 'new')
                            <span class="text-primary">menunggu kurir</span>
                        @elseif ($userType === 'kurir' && $item['status'] === 'new')
                            <button type="button" class="btn btn-primary" id="buttonpickupItem" data-id-item="{{ $item['id'] }}" data-loading-text="Loading...">pickup</button>
                        @elseif (in_array($userType, ['customer', 'admin']) && $item['status'] === 'on_progress')
                            <span class="text-warning">dalam proses pengiriman</span>
                        @elseif ($userType === 'kurir' && $item['status'] === 'on_progress')
                            <span class="text-warning">dalam proses</span>
                            <button type="button" class="btn btn-success" id="buttonDelivered" data-id-item="{{ $item['id'] }}" data-loading-text="Loading...">selesai</button>
                        @elseif (in_array($userType, ['customer', 'admin']) && $item['status'] === 'sent')
                            <span class="text-success">terkirim</span>
                        @elseif ($userType === 'kurir' && $item['status'] === 'sent')
                            <span class="text-success">selesai</span>
                        @else
                            {{ $item['status'] }}
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection