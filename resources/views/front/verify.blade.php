@extends('front.app')
@section('content')
    <div class="title" data-aos="fade-up">
        <div class="titleText">Verify a certificate</div>
        <div class="borderTitle"></div>
    </div>
    <div class="infoWrap">
        <div class="infoText">
            <h3>PLEASE TEXT via WhatsApp to 0{{config('app.telephone')}} This message:</h3> <br>
            Verify Certificate: <br>
            1. Candidate Name -
            Enter the candidate name exactly as it appears on the certificate. <br>
            2. Certificate number -
            The certificate number appears on the bottom left of the certificate. Enter this number exactly as it appears (including the dashes).
            And send it to us. We will reply to your text as soon as we can.
        </div>
    </div>

    </div>
@endsection
