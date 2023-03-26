@extends('admin.administrator.layout')
@section('adminPages')
    <div class="dashWrapper">
        <div class="adminHomePageTitle">Share a package</div>
        <div class="shareContainer">
            <div class="textShare">Package to Share:
                <div>#{{$packageToShare[0]->id}}-{{$packageToShare[0]->course_name}}</div>
            </div>
            @if($employeesToShare)
            <div class="selectContainer">
                <div class="selectTitle">Select an employee from below list</div>
                <form action="{{route('package.share.store',$packageToShare[0]->id)}}" method="POST" class="formShare">
                    @csrf
                    @method('POST')
                    <select class="box" name="shareToEmployee" required="required">
                        @foreach($employeesToShare as $employee)
                        <option class="option" value="{{$employee->employee}}">{{$employee->name}} - {{$employee->email}}</option>
                        @endforeach
                    </select>
                    <button class="adminButton" type="submit">Share</button>
                </form>
            </div>
            @else
             <div class="shareError">
                 <div class="textAdmin">Please register some employees in order to be able to share a course</div>
                 <a href="{{route('register.employee')}}"><div class="buttonLink">Register employees</div></a>
             </div>
            @endif
        </div>
    </div>
    <script src="//unpkg.com/alpinejs" defer></script>
@endsection
