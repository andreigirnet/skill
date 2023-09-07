@extends('front.app')
@section('content')
    <div class="secondaryBannerFaq">
{{--        <div class="secondaryBannerTitle">Train teams effectively and efficiently</div>--}}
    </div>
    <div class="title">
        <div class="titleText">How may we help you?</div>
        <div class="borderTitle"></div>
    </div>

    <div class="faqWrapper">
        <div class="faqContainer">
            <div class="faqBox">
                <div class="faqHeader">
                    <img src="{{asset("images/icons/info.png")}}" alt="">
                    <div class="faqTitle">Manual Handling FAQ's</div>
                </div>
                <div class="innerFaq">
                    <div class="actionAccordion">
                        <div class="accordionButton">Major FAQ'S</div>
                        <div id="uppDownArrow">
                            <svg class="svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="majorFaq">
                            <img src="{{asset("images/icons/right-arrow.png")}}" alt="">
                            <div class="majorFaqText">Download your course certificate as soon as you complete your course.</div>
                        </div>
                        <div class="majorFaq">
                            <img src="{{asset("images/icons/right-arrow.png")}}" alt="">
                            <div class="majorFaqText"> After you finish the theory part you can organize an online conference with our instructor for the practical part.
                                The practical session takes approximately 20-30 minutes
                                </div>
                        </div>
                        <div class="majorFaq">
                            <img src="{{asset("images/icons/right-arrow.png")}}" alt="">
                            <div class="majorFaqText">Price for manual handling training is 39€. No additional charges for the self assessment.</div>
                        </div>
                        <div class="majorFaq">
                            <img src="{{asset("images/icons/right-arrow.png")}}" alt="">
                            <div class="majorFaqText">You can complete your course online at a time and a place that fits in with your other commitments.</div>
                        </div>
                        <div class="majorFaq">
                            <img src="{{asset("images/icons/right-arrow.png")}}" alt="">
                            <div class="majorFaqText">Our courses work on any internet enabled devices (laptop/mobile phone/PC etc).</div>
                        </div>
                    </div>

                    <div class="actionAccordion">
                        <div class="accordionButton">Manual Handling Practical Part</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">After you finish the full theory part and pass the theoretical test, please send us a text message through Whatsapp chat on +353{{config('app.telephone')}} (TEXT ONLY, no phone calls) to book the practical part with our team. The practical part can be done online through a webinar room live with the instructor, it takes about 15-20 minutes to be completed.There are no extra charges  for the practical part. The course price covers theory and self assessment part.</div>
                    </div>

                    <div class="actionAccordion">
                        <div class="accordionButton">Manual Handling Certificate Approval</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div  class="accText">The Manual Handling Course is delivered by QQI approved Instructor FETAC Level 6</div>
                    </div>

                    <div class="actionAccordion">
                        <div class="accordionButton">Certification Delivery</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">All certificates are delivered via email that was used for the registration and can also be downloaded and printed from our website. 📲📩
                            Download your course certificate as soon as you have the course completed.
                        </div>
                    </div>

                    <div class="actionAccordion">
                        <div class="accordionButton">Do I need to pay additional charge for practical part?</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">No, to proceed with the practical part you don't need to pay anything additionally. The course price covers theory and self assessment part.</div>
                    </div>

                    <div class="actionAccordion">
                        <div class="accordionButton">Money-Back Guarantee</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">We want you to be completely satisfied with your purchase. We offer a 30 day, no hassle, no quibble, money back guarantee if you are not 100% satisfied.
                            *You must not complete the course or print your certificate in order to make a valid refund claim. Send us an email with your request and our team will assist you a.s.a.p.
                        </div>
                    </div>

                    <div class="actionAccordion">
                        <div class="accordionButton">I am looking to book a group of employees for the Manual Handling Training,how can I do this?</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">Please find attached the pdf file with all the information and instructions that will guide you through this process.This option will give you the opportunity to monitor the progress of your employees,to download their certificates once they have their course completed and much more…
                            Our system was built to offer transparency for all our customers and especially for employers/companies that are behind their employees’ training.
                            Feel free to give us a call on 0899706050 and get our assistance through this process for the first time to realize how easy and convenient it is for you.
                        </div>
                        <div class="faqMessage">
                            <div class="faqDownloadText">Download here:</div>
                            <a href="{{route('infoPdf')}}"><img src="{{asset('images/icons/pdf.png')}}" class="pdfImg" alt=""></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="faqBox">
                <div class="faqHeader">
                    <img src="{{asset("images/icons/info.png")}}" alt="">
                    <div class="faqTitle">About our courses</div>
                </div>
                <div class="innerFaq">
                    <div class="actionAccordion">
                        <div class="accordionButton">Which devices do your training courses work on?</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">You can access training on any electronic device as long as you have an internet connection.</div>
                    </div>

                    <div class="actionAccordion">
                        <div class="accordionButton">Are your instructors accredited?</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">All our instructors members of:
                            CMIOSH - Chartered Member of IOSH (Institution of Occupational Safety and Health)
                            Our instructors are qualified by IOSH, QQI and fully qualified as required by Irish Legislation and HSA.
                        </div>
                    </div>

                    <div class="actionAccordion">
                        <div class="accordionButton">Can I access the training material after I have completed my course?</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">Yes. You can use your username and password to login and review the training material 24/7 even after completing the training.</div>
                    </div>

                    <div class="actionAccordion">
                        <div class="accordionButton">How long do I have access to my training and can I get back to the course material after it’s completed?</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">There is no limit time for our customers to complete the course and each candidate can access the training anytime after the course it’s fully completed by using it’s personal login details that are received from our system on the day of it’s registration but also can be reset on our website by pressing on the ‘Forgot Password’ section.
                            You can split your training up over many different sessions if you wish, or complete it in one go. You’re free to learn entirely at your own pace.
                        </div>
                    </div>

                    <div class="actionAccordion">
                        <div class="accordionButton">Can I still take a course if I am not living in Ireland?</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">Yes!
                            Our course is available for anyone no matter where you live.
                            Once you have a device with an internet connection you are all sorted out.
                            If you are taking the course from outside Ireland, please check if your chosen course covers the legislation in your country,but the course content it’s identical for any country in the world and the same self assessment it’s required for any training you take.
                        </div>
                    </div>

                    <div class="actionAccordion">
                        <div class="accordionButton">Looking for a discount?</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">Bulk discount: 25+ courses will give you a 10% discount from the original price and it’s automatically calculated by our payment system when you add this amount of courses to your cart.
                            Feel free to contact our team on +353{{config('app.telephone')}} 📲 for any further assistance or information.
                            Or email us to info@irish-safetytraining.com
                            </div>
                    </div>

                    <div class="actionAccordion">
                        <div class="accordionButton">Languages available for this training?</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">This course has the full course content translated in 5 languages,specially created and designed for our customers needs. After the registration,you will be redirected to the main homepage where you can select the best language for this training and complete it. Only the practical part / self assessment is delivered in English.
                            The course content is available in English/Polish/Spanish/Romanian/Russian language.
                        </div>
                    </div>
                </div>
            </div>
            <div class="faqBox">
                <div class="faqHeader">
                    <img src="{{asset("images/icons/carts.png")}}" alt="">
                    <div class="faqTitle">Purchasing courses</div>
                </div>
                <div class="innerFaq">
                    <div class="actionAccordion">
                        <div class="accordionButton">How can I get started?</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">You can access training on any electronic device as long as you have an internet connection.</div>
                    </div>

                    <div class="actionAccordion">
                        <div class="accordionButton">I want to purchase a number of courses for my employees, how do I do this?</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">If you’re purchasing training for your team then you need to add the number of courses you require to your basket. Once you’ve made the purchase you will be able to find them in main Menu - Billing - Packages.</div>
                    </div>

                    <div class="actionAccordion">
                        <div class="accordionButton">Can I pay by invoice or direct through the payment system on the website?</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">We offer 2 options for payments:
                            First and the best option is when you pay through our website by using our payment system that will accept any credit card you have (from any country) so you can get access to your course/courses without any delay.
                            Second option is when you prefer to pay via bank transfer (invoice for payment required) but in this case you get access to your courses only after your payment is received and confirmed by our bank account and be prepared to wait up to 24-48 hrs depending on the bank you are using.
                            In both cases you receive an invoice for each payment processed.
                        </div>
                    </div>

                    <div class="actionAccordion">
                        <div class="accordionButton">If I order multiple courses will I receive any discount?</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText"> Yes, our bulk discounts are automatically applied to orders containing any combination of courses. We offer the following discount on bulk purchases: If you purchase:
                            <br>
                            -10% discount for orders of 25+ courses <br>
                            -15% discount for orders of 50+ courses <br>
                        </div>
                    </div>

                    <div class="actionAccordion">
                        <div class="accordionButton">Can I buy the course for someone else?</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">Yes,if you wish to register only one person/employee/family member,you can do so by using that candidate’s details (full name/personal email address) so that he/she can receive its own login details via email that allows to access our website 24/7 and take the course anytime it’s convenient to do so.</div>
                    </div>
                </div>
            </div>
            <div class="faqBox">
                <div class="faqHeader">
                    <img src="{{asset("images/icons/login.png")}}" alt="">
                    <div class="faqTitle"> Logging in</div>
                </div>
                <div class="innerFaq">
                    <div class="actionAccordion">
                        <div class="accordionButton">I have purchased training and don’t know what to do next.</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText"><p>Please click this link and activate your course <a href="{{route('home')}}" style="color: blue">"https://irish-safetytraining.com/packages"</a> If you’re still experiencing trouble, then please contact our friendly Support Team by calling +353{{config('app.telephone')}} or emailing us at
                                <a href="mailto:info@irish-safetytraining.com" style="color: blue">info@irish-safetytraining.com</a></p>
                        </div>
                    </div>

                    <div class="actionAccordion">
                        <div class="accordionButton">I’ve forgotten my password.</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">
                            If you are experiencing issues completing your course we recommend clearing your cache, which you can do on your browser. In most cases when you log back into your account you will be able to proceed without issue.<p> If this doesn’t work and you’re still experiencing problems then please get in touch with our Support Team by calling +353{{config('app.telephone')}} or emailing us at
                                <a href="mailto:info@irish-safetytraining.com" style="color: blue"> info@irish-safetytraining.com </a></p> For the best experience we recommend completing our training using Google Chrome.
                        </div>
                    </div>


                    <div class="actionAccordion">
                        <div class="accordionButton">I’m having problems completing my training.</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">If you are experiencing issues completing your course we recommend clearing your cache, which you can do on your browser. In most cases when you log back into your account you will be able to proceed without issue.
                            <p> If this doesn’t work and you’re still experiencing problems then please get in touch with our Support Team by calling +353{{config('app.telephone')}} or emailing us at
                            <a href="mailto:info@irish-safetytraining.com" style="color: blue"> info@skillcourses.ie </a></p>
                            For the best experience we recommend completing our training using Google Chrome.
                        </div>
                    </div>
                </div>
            </div>


            <div class="faqBox">
                <div class="faqHeader">
                    <img src="{{asset("images/icons/sunny.png")}}" alt="">
                    <div class="faqTitle"> Assesments and Certificates</div>
                </div>
                <div class="innerFaq">
                    <div class="actionAccordion">
                        <div class="accordionButton">Can I take the course or the final test again in case I fail?</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">Nothing to worry about.
                            You have 3 years free access to the whole course content and free unlimited trials for the final test just in case you fail.</div>
                    </div>

                    <div class="actionAccordion">
                        <div class="accordionButton">When will I receive my certificate?</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">Providing that your training has been fully paid for, you can download an electronic, PDF copy of your certificate immediately after completing your course.</div>
                    </div>


                    <div class="actionAccordion">
                        <div class="accordionButton">How can I  receive my certificate?
                            What if it’s lost?
                        </div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">Providing that your training has been fully paid for, you can download an electronic, PDF copy of your certificate immediately after completing your course. No plastic cards are being issued.
                            Also,you get 3 years free access to your certificate in case it's lost (you must log in to our website by using your own login details and find on the home page the button ‘Download Certificate’ and instantly our system will email your certificate. If you don’t remember your login details you can reset it from our home page by pressing the ‘Forgot Password’ section and the new personal link and password will be emailed to you instantly (always check your spam and junk folder).

                            This course has the full course content translated in 5 languages,specially created and designed for our customers needs. After the registration,you will be redirected to the main homepage where you can select the best language for this training and complete it. Only the practical part / self assessment is delivered in English.
                            The course content is available in English/Polish/Spanish/Romanian/Russian language.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
