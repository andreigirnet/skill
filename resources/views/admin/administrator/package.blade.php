@extends('admin.administrator.layout')
@section('adminPages')
    <div class="dashWrapper">
        <div class="adminHomePageTitle">Packages</div>
        <table class="styled-table">
            <thead>
            <tr>
                <th>Action</th>
                <th>Package ID</th>
                <th>Course Name</th>
                <th>Status</th>
                <th>Certificate</th>
            </tr>
            </thead>
            <tbody>
            @foreach($packages as $package)
                <tr>
                    <td class="actionOrder">
{{--                        <form class="deleteFormOrders" action="" method="POST">@csrf @method('DELETE')<button class="submitDeleteOrder"><img src="{{asset('images/icons/bin.png')}}" alt=""></button></form>--}}
                        <a href="{{route('package.share',$package->id)}}"><img src="{{asset('images/icons/share.png')}}" class="invoiceLink" alt=""></a>
                        <a href="{{route('course.index',$package->id)}}" class="startCourseButton">Start Course</a>
                    </td>
                    <td>{{$package->id}}</td>
                    <td>{{$package->course_name}}</td>
                    <td>{{$package->status}}</td>
                    @if($package->certificate_id)
                    <td><a href=""><img class="invoiceLink" src="{{asset('images/icons/pdf.png')}}" alt=""></a></td>
                    @else
                    <td>-</td>
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
    <script src="{{asset('js/adminPage.js')}}"></script>
@endsection
