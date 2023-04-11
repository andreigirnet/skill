@extends('admin.administrator.layout')
@section('adminPages')
    <div class="dashWrapper">
        <div class="adminHomePageTitle">Info</div>
        <div class="titleText" style="font-size: 23px">Packages Owned By: {{$user->email}}</div>
        <div href="" class="addEmployee" id="addPackage">Add package</div>
        <form action="{{route('packages.admin.add')}}" method="POST" id="adminCreatePackage" class="registerEmployeeForm">
            @csrf
            <input type="hidden" id="userNameEmployee" name="userId" value="{{$user->id}}">
            <label for="course" class="formLabel">Course Name</label>
            <select name="course" id="course" style="height: 40px" required>
                <option value="Manual Handling" >Manual Handling</option>
            </select>
            <label for="userEmailEmployee" class="formLabel">Quantity</label>
            <input type="number" id="userEmailEmployee" name="quantity" class="formInputProfile" placeholder="Type the quantity" required>
            <button type="submit" class="adminButton">Add</button>
        </form>
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
                        <a href="{{route('package.edit', $package->package_id)}}" class="editLink"><img src="{{asset('images/icons/edit.png')}}" alt=""></a>
                        <a href="{{route('package.owner', $package->package_id)}}" class="editLink"><img src="{{asset('images/icons/star.png')}}" alt=""></a>
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

        <div class="titleText" style="font-size: 23px">Employees Owned By: {{$user->email}}</div>
        <div href="" class="addEmployee" id="addEmployee">Add employee</div>
        <form action="{{route('register.employee.store')}}" method="POST" id="adminRegisterEmployee" class="registerEmployeeForm">
            @csrf
            <label for="userNameEmployee" class="formLabel">Employee Full Name</label>
            <input type="text" id="userNameEmployee" name="name" class="formInputProfile">

            <label for="userEmailEmployee" class="formLabel">Employee Email</label>
            <input type="email" id="userEmailEmployee" name="email" class="formInputProfile">

            <label for="userEmailPhone" class="formLabel">Employee Phone Number</label>
            <input type="text" id="userEmailPhone" name="phone" class="formInputProfile">

            <button type="submit" class="adminButton">Add</button>
        </form>
        <table class="styled-table">
            <thead>
            <tr>
                <th>Action Id</th>
                <th>Employee ID</th>
                <th>Created At</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td class="actionRow">
                        <form action="{{route('delete.employer', $employee->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="removeButton">
                                <img src="{{asset('images/icons/bin.png')}}" alt="">
                            </button>
                        </form>
                    </td>
                    <td>{{$employee->id}}</td>
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
    <script>
        let addEmployee = document.getElementById('addEmployee');
        const form = document.getElementById('adminRegisterEmployee');
        let showRegisterEmployee = false;
        addEmployee.addEventListener('click', function (){
            showRegisterEmployee = !showRegisterEmployee;
            if(showRegisterEmployee === true){
                form.style.display = 'flex';
            }else{
                form.style.display = 'none';
            }
        })

        let addPackage = document.getElementById('addPackage');
        const formPackage = document.getElementById('adminCreatePackage');
        let showAddPackage = false;
        addPackage.addEventListener('click', function (){
            showAddPackage = !showAddPackage;
            if(showAddPackage === true){
                formPackage.style.display = 'flex';
            }else{
                formPackage.style.display = 'none';
            }
        })
    </script>
@endsection
