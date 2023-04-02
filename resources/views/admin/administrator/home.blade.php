@extends('admin.administrator.layout')
@section('adminPages')
   <div class="homePageAdminContent">
       <div class="adminHomePageTitle">EFFECTIVE AND ACCESIBLE</div>
       <div class="adminHomePageInformation">
           <div class="textColorTitle">{{env('APP_NAME')}}</div>
           is one of Irish leading providers of simple, effective, and accessible occupational health and safety training materials.

           We are focused on providing our wide range of Irish and International clients with excellence in customer service, and regulatory compliance.

           Our easy-to-use online learning platform makes training easy whether for yourself or hundreds of your staff.
       </div>
{{--        <div class="stepsCircle">--}}
{{--            <div class="stepsContainer">--}}
{{--                <div class="stepsCircleTitle">STEP 1- PAY FOR YOUR COURSE</div>--}}
{{--                <div class="circle-progress first-circle" data-aos="fade-right">--}}
{{--                    <div class="circle-nr">1</div>--}}
{{--                    <svg viewBox="0 0 36 36" class="circular-chart orange">--}}
{{--                        <path class="circle-bg"--}}
{{--                              d="M18 2.0845--}}
{{--                                         a 15.9155 15.9155 0 0 1 0 31.831--}}
{{--                                         a 15.9155 15.9155 0 0 1 0 -31.831"--}}
{{--                        />--}}
{{--                        <path class="circle"--}}
{{--                              stroke-dasharray="25, 100"--}}
{{--                              d="M18 2.0845--}}
{{--                                         a 15.9155 15.9155 0 0 1 0 31.831--}}
{{--                                         a 15.9155 15.9155 0 0 1 0 -31.831"--}}
{{--                        />--}}

{{--                  </svg>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="stepsContainer">--}}
{{--                <div class="stepsCircleTitle">STEP 2 - STUDY & PASS THE TEST</div>--}}
{{--                <div class="circle-progress first-circle" data-aos="fade-right">--}}
{{--                    <div class="circle-nr">2</div>--}}
{{--                    <svg viewBox="0 0 36 36" class="circular-chart orange">--}}
{{--                        <path class="circle-bg"--}}
{{--                              d="M18 2.0845--}}
{{--                                         a 15.9155 15.9155 0 0 1 0 31.831--}}
{{--                                         a 15.9155 15.9155 0 0 1 0 -31.831"--}}
{{--                        />--}}
{{--                        <path class="circle"--}}
{{--                              stroke-dasharray="75, 100"--}}
{{--                              d="M18 2.0845--}}
{{--                                         a 15.9155 15.9155 0 0 1 0 31.831--}}
{{--                                         a 15.9155 15.9155 0 0 1 0 -31.831"--}}
{{--                        />--}}

{{--                    </svg>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="stepsContainer">--}}
{{--                <div class="stepsCircleTitle">STEP 3 - DOWNLOAD CERTIFICATE</div>--}}
{{--                <div class="circle-progress first-circle" data-aos="fade-right">--}}
{{--                    <div class="circle-nr">3</div>--}}
{{--                    <svg viewBox="0 0 36 36" class="circular-chart orange">--}}
{{--                        <path class="circle-bg"--}}
{{--                              d="M18 2.0845--}}
{{--                                         a 15.9155 15.9155 0 0 1 0 31.831--}}
{{--                                         a 15.9155 15.9155 0 0 1 0 -31.831"--}}
{{--                        />--}}
{{--                        <path class="circle"--}}
{{--                              stroke-dasharray="100, 100"--}}
{{--                              d="M18 2.0845--}}
{{--                                         a 15.9155 15.9155 0 0 1 0 31.831--}}
{{--                                         a 15.9155 15.9155 0 0 1 0 -31.831"--}}
{{--                        />--}}

{{--                    </svg>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

       <div class="productSection">
           <div class="productWrapper">
               <div class="product-img">
                   <img src="{{asset("images/products/productSmall.png")}}" height="420" width="327">
               </div>
               <div class="product-info">
                   <div class="product-text">
                       <h1>Manual Handling</h1>
                       <h2>By {{env("app_name")}}</h2>
                       <div class="product-info-icons">
                           <div class="product-icons">
                               <img src="images/icons/back-in-time.png" alt="">
                               <div>Duration: 2-3 hours</div>
                           </div>
                           <div class="product-icons">
                               <img src="images/icons/certificate.png" alt="">
                               <div>Certificate Validity: 3 Years</div>
                           </div>
                           <div class="product-icons">
                               <img src="images/icons/money.png" alt="">
                               <div>Only 39€</div>
                           </div>
                       </div>
                   </div>
                   <div class="product-price-btn">
                       <a href="{{route('front.product',1)}}"><button type="button" class="buttonInfo" style="background: white;   border: 1px solid var(--yellowColor);color: black;">info</button></a>
                       <form action="{{route('basket.add')}}" method="POST">
                           @csrf
                           <input type="hidden" value="1" name="productId">
                           <form action="{{}}" method="POST">@csrf<button type="submit">Add To Basket</button></form>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection
