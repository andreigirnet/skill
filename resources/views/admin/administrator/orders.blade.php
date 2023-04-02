@extends('admin.administrator.layout')
@section('adminPages')
    <div class="dashWrapper">
        <div class="adminHomePageTitle">Orders</div>
        @if(count($orders))
        <table class="styled-table">
            <thead>
            <tr>
                <th>Purchase Date</th>
                <th>Order Id</th>
                <th>Amount</th>
                <th>Quantity</th>
                <th>Status</th>
                <th>Invoice</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{$order->created_at}}</td>
                <td>{{$order->id}}</td>
                <td>{{$order->paid}}</td>
                <td>{{$order->quantity}}</td>
                <td>{{$order->status}}</td>
                <td><a href="{{route('invoice.download',$order->id)}}"><img class="invoiceLink" src="{{asset('images/icons/pdf.png')}}" alt=""></a></td>
            </tr>
            @endforeach
            {{--        <tr class="active-row">--}}
            {{--            <td>Melissa</td>--}}
            {{--            <td>5150</td>--}}
            {{--        </tr>--}}
            {{--        <!-- and so on... -->--}}
            </tbody>
        </table>
        @else
            <div class="textAdmin">No Orders at the moment</div>
        @endif
    </div>
@endsection
