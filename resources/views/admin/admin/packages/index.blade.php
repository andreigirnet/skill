@extends('admin.administrator.layout')
@section('adminPages')
    <div class="dashWrapper">
        <div class="adminHomePageTitle">All Packages</div>
        <div class="searchUser">
            <div class="searchText">Search for a Package</div>
            <form action="{{route('package.search')}}">
                <input type="text" name="id" placeholder="">
                <button type="submit" class="searchButton">Search</button>
            </form>
        </div>
        <table class="styled-table">
            <thead>
            <tr>
                <th>Action</th>
                <th>Package Id</th>
                <th>Created At</th>
                <th>Holder Name</th>
                <th>Course Name</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach($packages as $package)
                <tr>
                    <td class="actionRow">
                        <form action="{{route('user.delete', $package->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="removeButton">
                                <img src="{{asset('images/icons/bin.png')}}" alt="">
                            </button>
                        </form>
                        <a href="{{route('package.edit', $package->id)}}" class="editLink"><img src="{{asset('images/icons/edit.png')}}" alt=""></a>
                    </td>
                    <td>{{$package->id}}</td>
                    <td>{{$package->created_at}}</td>
                    <td>{{$package->userPackageHolder}}</td>
                    <td>{{$package->course_name}}</td>
                    <td>{{$package->status}}</td>
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
