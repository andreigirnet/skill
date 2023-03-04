@extends('admin.administrator.layout')
@section('adminPages')
    <div class="dashWrapper">
        <div class="adminHomePageTitle">Employer Dashboard</div>
        <table class="styled-table">
            <thead>
            <tr>
                <th>Employee Date Of Registration</th>
                <th>Employee Name</th>
                <th>Employee email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($employees as $employee)
            <tr>
                <td>{{$employee->created_at}}</td>
                <td>{{$employee->name}}</td>
                <td>{{$employee->email}}</td>
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
