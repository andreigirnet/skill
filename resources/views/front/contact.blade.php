@extends('front.app')
@section('content')
    <div class="secondaryBannerContact">
        <div class="secondaryBannerTeamLayer"></div>
        <div class="secondaryBannerTitle">Contact Us</div>
    </div>
    <div class="trainTeamsSection">
        <div class="trainTeamsWrapper">
            <div class="teamTitle">Call us on - 0{{config('app.telephone')}}</div>
            <div class="teamDescription">Our working hours are: 10am-7pm Monday - Friday & 10am - 6pm <br> Weekend/Bank Holiday or email us to
                {{config('app.email')}}</div>
        </div>
    </div>


@endsection
