@extends('admin.administrator.layout')
@section('adminPages')
    <div class="dashWrapper">
        <div class="adminHomePageTitle">Orders</div>
        <table class="styled-table">
            <thead>
            <tr>
                <th>Action</th>
                <th>Purchase Date</th>
                <th>Order Id</th>
                <th>Amount</th>
                <th>Quantity</th>
                <th>Invoice</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
            <tr>
                <td class="actionOrder">
                    <form class="deleteFormOrders" action="{{route('order.delete', $order->id)}}" method="POST">@csrf @method('DELETE')<button class="submitDeleteOrder"><img src="{{asset('images/icons/bin.png')}}" alt=""></button></form>
                    <img src="{{asset('images/icons/share.png')}}" class="invoiceLink" alt="">
                </td>
                <td>{{$order->created_at}}</td>
                <td>{{$order->id}}</td>
                <td>{{$order->paid}}</td>
                <td>{{$order->quantity}}</td>
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
    </div>
@endsection
