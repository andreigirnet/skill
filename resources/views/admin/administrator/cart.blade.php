@extends('admin.administrator.layout')
@section('adminPages')
    <div class="dashWrapper">
        <div class="adminHomePageTitle">Your Basket</div>
        <table class="styled-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Course Name</th>
                <th>Cost</th>
                <th>Quantity</th>
                <th>Total (€)</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cartItems as $cartItem)
                <tr id="cartTableRow" x-data="{cartQty:{{$cartItem->quantity}}}">
                    <td>{{$cartItem->id}}</td>
                    <td>{{$cartItem->course_name}}</td>
                    <td>{{$cartItem->cost}}</td>
                    <td class="qtyContainer">
                        <img class="qtyIcon" x-on:click="cartQty > 1 ? cartQty-- : null" src="{{asset('images/icons/minus.png')}}" alt="">
                        <input class="qtyInput" type="number" min="0" x-model="cartQty">
                        <img class="qtyIcon" x-on:click="cartQty++" src="{{asset('images/icons/plus.png')}}" alt="">
                    </td>
                    <td x-text="cartQty * {{$cartItem->cost}}"></td>
                    <td>
                        <form action="{{route('basket.delete', $cartItem->id)}}" method="POST">@csrf @method('delete') <button class="deleteIcon" type="submit"><img class="qtyIcon" src="{{asset('images/icons/bin.png')}}" alt=""></button></form>
                    </td>
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
    <script src="//unpkg.com/alpinejs" defer></script>
@endsection
