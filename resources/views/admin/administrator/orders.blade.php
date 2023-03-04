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
                <th>Status</th>
                <th>Invoice</th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            {{--        <tr class="active-row">--}}
            {{--            <td>Melissa</td>--}}
            {{--            <td>5150</td>--}}
            {{--        </tr>--}}
            {{--        <!-- and so on... -->--}}
            </tbody>
        </table>
    </div>
@endsection
