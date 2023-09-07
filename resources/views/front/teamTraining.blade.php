@extends('front.app')
@section('content')
    <div class="secondaryBannerTeam">
        <div class="secondaryBannerTeamLayer"></div>
        <div class="secondaryBannerTitle">Train teams effectively and efficiently</div>
    </div>
    <div class="trainTeamsSection">
        <div class="trainTeamsWrapper">
            <div class="teamTitle">Train teams effectively and efficiently</div>
            <div class="teamDescription">At Irish health and Safety Training Centre we pride ourselves on being here to help you with your training needs in a wide range of subject areas. <br>
                Our e-learning courses are 100% online, making it easy for you to get the training that you and your company need, either in your spare time or at work and at any time of day.</div>
        </div>
    </div>
    <div class="trainingContainer">
        <div class="trainingRightSide">
            <div class="trainingLeftDescription">
                <div class="trainingTitle">Bulk Discounts</div>
                <div class="trainingDescription">Bigger orders = better discounts. Our bulk discounts apply to orders containing any combination of courses. The courses have no time limit for completion so you can take full advantage of your training.<br>

                    -10% discount for orders of 25+ courses <br>
                    -15% discount for orders of 50+ courses <br>

                    Large enterprise orders above 500 courses are dealt with on a case-by-case basis. This includes a tailor-made package to suit your needs, with some of the following benefits:<br>

                    -A dedicated Account Manager<br>
                    -Course reset options if an employee leaves your business<br>
                    -Customised reports and progress tracking within your personal Management Suite<br>
                    To discuss any of your training requirements and budget in more detail, please contact our friendly sales team on +353{{config('app.telephone')}}.</div>
            </div>
            <div class="trainingRightIcon">
                <img src="{{asset('images/training/tr-img-1.png')}}" alt="">
            </div>
        </div>

        <div class="trainingLeftSide">
            <div class="trainingLeftIcon">
                <img src="{{asset('images/training/tr-img-2.png')}}" alt="">
            </div>
            <div class="trainingRightDescription">
                <div class="trainingTitle">Can I pay by invoice?</div>
                <div class="trainingDescription">
                    Yes you can!

                    Benefits of paying by invoice include:<br>

                    -30-day invoice payment terms<br>
                    -Option to add company PO number<br>
                    -Access to training before invoice payment is made*<br>
                    If you require invoicing for lower quantities, you can contact us directly and we’ll be pleased to help.

                    * Training certificates will be issued after invoice payment is made.
                </div>
            </div>
        </div>

        <div class="trainingRightSide">
            <div class="trainingLeftDescription">
                <div class="trainingTitle">Urgent training requirements? No problem...</div>
                <div class="trainingDescription">
                    From our self-service checkout system, to our instant online certification; if you need to get your team trained quickly, we can help.<br>

                    Once you have identified a skills gap in your organisation every second that passes is a wasted opportunity or a risk to quality. <br>
                    With our system you can have your team learning in minutes. <br>
                    Delivery of compliance training is measured in hours not days. Huge numbers of users can be trained simultaneously with no logistical problems.<br>
                </div>
            </div>
            <div class="trainingRightIcon">
                <img src="{{asset('images/training/tr-img-3.png')}}" alt="">
            </div>
        </div>

        <div class="trainingLeftSide">
            <div class="trainingLeftIcon">
                <img src="{{asset('images/training/tr-img-4.png')}}" alt="">
            </div>
            <div class="trainingRightDescription">
                <div class="trainingTitle">Minimise disruption - train online</div>
                <div class="trainingDescription">
                    Traditional training methods mean getting all your staff to break off from work and gather in one place. We believe there's a better way...<br>

                    Training online frees you from the costs and disruption to your business of gathering everyone in a single place to learn.<br>

                    Online training is accessible 24 hours a day, 7 days a week, 365 days a year; and your progress is automatically saved. Staff can train from any location or even when commuting.<br>
                </div>
            </div>
        </div>

    </div>

@endsection
