@extends('admin.layout')
@section('titlepage','Danh sách sản phẩm')
@section('content')
<h1>Danh sách Bills</h1>

    @foreach ($groupedBills as $userBills)
        <h2>Đơn hàng: {{ $userBills[0]->user_id }}</h2>

        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    {{-- <th>Tổng tiền</th> --}}
                    <th>Tên người nhận</th>
                    <th>Số điện thoại nguời nhận</th>
                    <th>Địa chỉ giao hàng</th>
                    <th>Hình ảnh sản phẩm</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($userBills as $index => $bill)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        
                        <td>{{ $bill->billing_name }}</td>
                        <td>{{ $bill->shipping_phone }}</td>
                        <td>{{ $bill->shipping_address }}</td>
                        <td>
                            <img src="{{ asset('uploaded/'.$productImages[$bill->product_id]) }}" alt="Product Image" width="50">
                        </td>
                    </tr>
                   
                @endforeach <h2> Tổng tiền: {{ $bill->total }} VND </h2>
            </tbody>
        </table>
    @endforeach

@endsection