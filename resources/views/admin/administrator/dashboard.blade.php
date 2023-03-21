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
                @if(auth()->user()->is_admin)
                <th>Action</th>
                @endif
            </tr>
            </thead>
            <tbody>
            @foreach($employees as $employee)
            <tr>
                <td>{{$employee->created_at}}</td>
                <td>{{$employee->name}}</td>
                <td>{{$employee->email}}</td>
                @if(auth()->user()->is_admin)
                <td>
                    <form action="{{route('delete.employer',$employee->employee)}}" method="POST"> @csrf @method('DELETE')<button class="submitDeleteOrder"><img class="deleteFormOrders" src="{{asset('images/icons/bin.png')}}" alt=""></button></form>
                </td>
                @endif
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
