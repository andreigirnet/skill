@extends('admin.administrator.layout')
@section('adminPages')
    <div class="dashWrapper">
        <div class="adminHomePageTitle">All Users</div>
        <div class="searchUser">
            <div class="searchText">Search for a user</div>
            <form action="{{route('user.search')}}">
                <input type="text" name="email" placeholder="Type the users email">
                <button type="submit" class="searchButton">Search</button>
            </form>
        </div>
        <table class="styled-table">
            <thead>
            <tr>
                <th>Action</th>
                <th>User Id</th>
                <th>Created At</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td class="actionRow">
                        <form action="{{route('user.delete', $user->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="removeButton">
                                <img src="{{asset('images/icons/bin.png')}}" alt="">
                            </button>
                        </form>
                        <a href="{{route('user.edit', $user->id)}}" class="editLink"><img src="{{asset('images/icons/edit.png')}}" alt=""></a>
                        <a href="{{route('user.info', $user->id)}}" class="editLink"><img src="{{asset('images/icons/info.png')}}" alt=""></a>
                    </td>
                    <td>{{$user->id}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
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
