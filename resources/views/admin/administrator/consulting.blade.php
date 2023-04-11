@extends('admin.administrator.layout')
@section('adminPages')
    <div class="consultingContainer">
        <h1 class="consultingTitle">Our Services:</h1>
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
        </div>
        <hr>
        <br>
        <br>
        <div class="consultingListText">We work collaboratively with you to determine your objectives, and apply our expertise to develop a culture of workplace health and safety.</div>
        <br>
        <br>
        <h1 class="consultingTitle">Our Approach</h1>
        <div class="consultingListText">We provide support to employers who require third-party support to achieve their health and safety objectives for their workplace or on a project basis.<br>
            Through our discovery process we work together to determine your unique objectives and requirements, and establish key results to align our work with your measurement of success.<br>

            At irish-safetytraining.com, we work with organizations to support the ongoing implementation of a health and safety program with audits and inspections, through the development of hazard specific policy and procedure, and as the outsourced health and safety management as required.<br>

            If you have questions about our Advisory service offering or what is required for your workplace by the act and legislation, you can schedule a consultation with our team directly at
            {{0 . config('app.telephone')}}.</div>
    </div>
@endsection
