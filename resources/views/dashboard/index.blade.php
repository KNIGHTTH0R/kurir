@extends('layout.main')

@section('content')
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
                        @if ($userType === 'kurir' && $item['status'] === 'new')
                            <button type="button" class="btn btn-primary">pickup</button>
                        @elseif ($userType === 'kurir' && $item['status'] === 'on_progress')
                            <span class="text-warning">dalam proses</span>
                            <button type="button" class="btn btn-success">selesai</button>
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