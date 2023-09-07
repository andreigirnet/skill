@extends('front.app')
@section('content')
    <div class="title" data-aos="fade-up">
        <div class="titleText">Safety Consultancy Services</div>
        <div class="borderTitle"></div>
    </div>

    <div class="consultingWrap" data-aos="fade-up">
        <div class="consultingContainer">
            <h1 class="consultingTitle">Our Services:</h1>
            <br><br>
            <div class="consultingListText">Our years of experience has prepared us to be at the forefront of the latest corporate safety standards to prevent accidents.</div>
            <br>
            <div class="consultingListText"><h4>Safety Consultancy Services in Dublin </h4>
                We carry out Health & Safety Consultancy throughout Dublin with experts in the field to provide courses and preparation in companies of all types.
            </div>
            <br>
            <div class="consultingListText">We also investigate accidents and their causes, as well as the implementation of the necessary prevention so that they do not happen again in the work area.</div>

            <div class="consultingList">
                <div class="consultingListItem">
                    <img src="{{asset("images/icons/right-arrow.png")}}" alt="">
                    <div class="consultingListText">Safe-T-Cert Management systems</div>
                </div>
                <div class="consultingListItem">
                    <img src="{{asset("images/icons/right-arrow.png")}}" alt="">
                    <div class="consultingListText">Workplace Inspections </div>
                </div>
                <div class="consultingListItem">
                    <img src="{{asset("images/icons/right-arrow.png")}}" alt="">
                    <div class="consultingListText">Comprehensive Safety Audits</div>
                </div>
                <div class="consultingListItem">
                    <img src="{{asset("images/icons/right-arrow.png")}}" alt="">
                    <div class="consultingListText">Cloud Safety File Documentation Setup</div>
                </div>
                <div class="consultingListItem">
                    <img src="{{asset("images/icons/right-arrow.png")}}" alt="">
                    <div class="consultingListText">Preparation of Heath and Safety Policies </div>
                </div>
                <div class="consultingListItem">
                    <img src="{{asset("images/icons/right-arrow.png")}}" alt="">
                    <div class="consultingListText">Preparation of Risk, Noise and COSHH Assessments</div>
                </div>
                <div class="consultingListItem">
                    <img src="{{asset("images/icons/right-arrow.png")}}" alt="">
                    <div class="consultingListText">Company Safety Statements</div>
                </div>
                <div class="consultingListItem">
                    <img src="{{asset("images/icons/right-arrow.png")}}" alt="">
                    <div class="consultingListText">Health and Safety Plans</div>
                </div>
                <div class="consultingListItem">
                    <img src="{{asset("images/icons/right-arrow.png")}}" alt="">
                    <div class="consultingListText">Method Statements</div>
                </div>
                <div class="consultingListItem">
                    <img src="{{asset("images/icons/right-arrow.png")}}" alt="">
                    <div class="consultingListText">Risk Assessments</div>
                </div>
                <div class="consultingListItem">
                    <img src="{{asset("images/icons/right-arrow.png")}}" alt="">
                    <div class="consultingListText">Accident Incident Investigation  </div>
                </div>
                <div class="consultingListItem">
                    <img src="{{asset("images/icons/right-arrow.png")}}" alt="">
                    <div class="consultingListText">Assessing training needs and provision of seminars/toolbox talks and training courses</div>
                </div>
                <div class="consultingListItem">
                    <img src="{{asset("images/icons/right-arrow.png")}}" alt="">
                    <div class="consultingListText">PAT testing</div>
                </div>
            </div>
            <hr style="margin-top: 50px">
            <br>
            <br>

            <div class="consultingListText">Please send us an email with any request regarding our services listed above on
                {{config('app.email')}} or call us on 0{{config('app.telephone')}}.<br><br>
            </div>
        </div>
    </div>
@endsection
