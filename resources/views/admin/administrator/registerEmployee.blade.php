@extends('admin.administrator.layout')
@section('adminPages')
    <div class="registerEmployeeWrapper">
        <div class="leftRegisterEmployee">
            <div class="stepsCircle">
                <div class="stepsContainer">
                    <div class="stepsCircleTitle">STEP 1- Register The Employee</div>
                    <div class="circle-progress first-circle" data-aos="fade-right">
                        <div class="circle-nr">1</div>
                        <svg viewBox="0 0 36 36" class="circular-chart orange">
                            <path class="circle-bg"
                                  d="M18 2.0845
                                         a 15.9155 15.9155 0 0 1 0 31.831
                                         a 15.9155 15.9155 0 0 1 0 -31.831"
                            />
                            <path class="circle"
                                  stroke-dasharray="25, 100"
                                  d="M18 2.0845
                                         a 15.9155 15.9155 0 0 1 0 31.831
                                         a 15.9155 15.9155 0 0 1 0 -31.831"
                            />

                        </svg>
                    </div>
                </div>
            </div>

            <div class="stepsCircle">
                <div class="stepsContainer">
                    <div class="stepsCircleTitle">STEP 2- Check Your Dashboard</div>
                    <div class="circle-progress first-circle" data-aos="fade-right">
                        <div class="circle-nr">2</div>
                        <svg viewBox="0 0 36 36" class="circular-chart orange">
                            <path class="circle-bg"
                                  d="M18 2.0845
                                         a 15.9155 15.9155 0 0 1 0 31.831
                                         a 15.9155 15.9155 0 0 1 0 -31.831"
                            />
                            <path class="circle"
                                  stroke-dasharray="75, 100"
                                  d="M18 2.0845
                                         a 15.9155 15.9155 0 0 1 0 31.831
                                         a 15.9155 15.9155 0 0 1 0 -31.831"
                            />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="stepsCircle">
                <div class="stepsContainer">
                    <div class="stepsCircleTitle">STEP 3- Send Him The Course Link</div>
                    <div class="circle-progress first-circle" data-aos="fade-right">
                        <div class="circle-nr">3</div>
                        <svg viewBox="0 0 36 36" class="circular-chart orange">
                            <path class="circle-bg"
                                  d="M18 2.0845
                                         a 15.9155 15.9155 0 0 1 0 31.831
                                         a 15.9155 15.9155 0 0 1 0 -31.831"
                            />
                            <path class="circle"
                                  stroke-dasharray="100, 100"
                                  d="M18 2.0845
                                         a 15.9155 15.9155 0 0 1 0 31.831
                                         a 15.9155 15.9155 0 0 1 0 -31.831"
                            />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="rightRegisterEmployee">
            <div class="adminHomePageTitle">Register Your Employees</div>
            <div class="adminHomePageDescription">Register Your Employees by adding their details in the form</div>
            <form action="{{route('register.employee.store')}}" method="POST" class="registerEmployeeForm">
                @csrf
                <label for="userNameEmployee" class="formLabel">Employee Full Name</label>
                <input type="text" id="userNameEmployee" name="name" class="formInputProfile">

                <label for="userEmailEmployee" class="formLabel">Employee Email</label>
                <input type="email" id="userEmailEmployee" name="email" class="formInputProfile">

                <label for="userEmailPhone" class="formLabel">Employee Phone Number</label>
                <input type="text" id="userEmailPhone" name="phone" class="formInputProfile">

                <button type="submit" class="adminButton">Add</button>
            </form>
            <div id="errorDiv">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div>*{{$error}}</div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
