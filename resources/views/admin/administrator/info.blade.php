@extends('admin.administrator.layout')
@section('adminPages')
    <div class="dashWrapper">
        <div class="adminHomePageTitle">Info</div>
        <div class="titleText" style="font-size: 23px">Packages Owned By: {{$user->email}}</div>
        @if($packages)
        <table class="styled-table">
            <thead>
            <tr>
                <th>Action Id</th>
                <th>Package Id</th>
                <th>Purchase Date</th>
                <th>Course Name</th>
                <th>Certificate</th>
                <th>Expiration Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($packages as $package)
                <tr>
                    <td class="actionRow">
                        <form action="{{route('package.delete', $package->package_id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="removeButton">
                                <img src="{{asset('images/icons/bin.png')}}" alt="">
                            </button>
                        </form>
                        <a href="" class="editLink"><img src="{{asset('images/icons/edit.png')}}" alt=""></a>
                    </td>
                    <td>{{$package->package_id}}</td>
                    <td>{{$package->created_at}}</td>
                    <td>{{$package->course_name}}</td>
                    @if($package->certificate_id)
                        <td><a href="{{route('certificate.download', $package->certificate_id)}}"><img class="invoiceLink" src="{{asset('images/icons/pdf.png')}}" alt=""></a></td>
                    @endif
                    <td>{{$package->expiration_date}}</td>
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
                <div class="textAdmin">No packages owned by this user, share one below</div>
                <a href="{{route('package.index')}}"><div class="buttonLink">Share a package</div></a>
            </div>
        @endif
@endsection
