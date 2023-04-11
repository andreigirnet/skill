@extends('admin.administrator.layout')
@section('adminPages')
    <div class="dashWrapper">
        <div class="adminHomePageTitle">Employer Dashboard</div>
        @if($employees)
            <table class="styled-table">
                <thead>
                <tr>
                    <th>Action</th>
                    <th>Employee Date Of Registration</th>
                    <th>Employee Name</th>
                    <th>Employee email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employees as $employee)
                    <tr>

                        <td>
                            @if(auth()->user()->is_admin === 1)
                                <form action="{{route('delete.employer',$employee->employee)}}" method="POST"> @csrf @method('DELETE')<button class="submitDeleteOrder"><img class="deleteFormOrders" src="{{asset('images/icons/bin.png')}}" alt=""></button>
                                </form>
                            @endif
                            <a href="{{route('employer.info', $employee->employee)}}" class="editLink"><img src="{{asset('images/icons/info.png')}}" alt=""></a>
                        </td>

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
        @else
            <div class="shareError">
                <div class="textAdmin">Please register some employees in order to be able to share a course</div>
                <a href="{{route('register.employee')}}"><div class="buttonLink">Register employees</div></a>
            </div>
        @endif
    </div>
@endsection
