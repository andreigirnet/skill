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
                            <div class="majorFaqText">After you finished theory part you can book online conference with our instructor for practical part.
                                The practical session takes approximately 20 minutes.</div>
                        </div>
                        <div class="majorFaq">
                            <img src="{{asset("images/icons/right-arrow.png")}}" alt="">
                            <div class="majorFaqText">Price for manual handling training is 39€. No additional charges for practical part.</div>
                        </div>
                        <div class="majorFaq">
                            <img src="{{asset("images/icons/right-arrow.png")}}" alt="">
                            <div class="majorFaqText">Download your course certificate as soon as you complete your course.</div>
                        </div>
                        <div class="majorFaq">
                            <img src="{{asset("images/icons/right-arrow.png")}}" alt="">
                            <div class="majorFaqText">Download your course certificate as soon as you complete your course.</div>
                        </div>
                    </div>

                    <div class="actionAccordion">
                        <div class="accordionButton">Manual Handling Practical Part</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">After you finish the full theory part and pass the theoretical test, please send us a text message on +353 830 800 800 (TEXT ONLY, no phone calls) via WhatsApp to book the practical part with us. The practical part can be done online through a webinar room live with the instructor, it takes about 15-20 minutes to be completed. You don’t need to pay any additional charges for the practical part. The course price covers theory and self assessment part.</div>
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
                        <div class="accText">All certificates are delivered through email, also can be downloaded and printed from our website.📲📩
                            Download your course certificate as soon as you complete your course.</div>
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
                            *You must not complete the course or print your certificate in order to make a valid refund claim.</div>
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
                        <div class="accText">Our instructors members of:
                            CMIOSH - Chartered Member of IOSH (Institution of Occupational Safety and Health)
                            Our instructors are qualified by IOSH, QQI.

                            We have a reputation for reliability, quality, and convenience with our products and services</div>
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
                        <div class="accordionButton">Is there a time limit on completing the course?</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">No, there’s no time limit in which you must complete your training. You can split your training up over many different sessions if you wish, or complete it in one go. You’re free to learn entirely at your own pace.</div>
                    </div>

                    <div class="actionAccordion">
                        <div class="accordionButton">I don’t live in the Ireland; can I still take a course?</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">Yes! Our courses can be taken from anywhere in the world, as long as you have a device with an internet connection. We’re happy to email your certificate to your email address provided straight away after the course if fully completed and you have free access to our system to download your certificate anytime you wish after that. If you are taking the course from outside Ireland, please check if your chosen course covers the legislation in your country.</div>
                    </div>

                    <div class="actionAccordion">
                        <div class="accordionButton">Training staff?</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">Bulk discount: 10% on 50+ courses. Free progress monitoring Simple to manage Please call us on 019682644 📲</div>
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
                        <div class="accordionButton">Can I pay by invoice?</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">Yes you can! If you would like to pay by invoice please contact our Sales Team by calling 019682644 or emailing us at info@skillcourses.ie. We require payment within 30 days of the date of invoice.</div>
                    </div>

                    <div class="actionAccordion">
                        <div class="accordionButton">If I order multiple courses will I receive any discount?</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">Yes, our bulk discounts are automatically applied to orders containing any combination of courses. We offer the following discount on bulk purchases: If you purchase 50+ courses you receive a 10% discount applied on all courses.</div>
                    </div>

                    <div class="actionAccordion">
                        <div class="accordionButton">I’m buying a course for someone else, what details do I need to enter?</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">When purchasing the training please enter the details of the cardholder. When the learner register for the first time they will be asked to enter their own details.</div>
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
                        <div class="accText">Please click this link and activate your course https://skillcourses.ie/irl/payment/package" If you’re still experiencing trouble, then please contact our friendly Support Team by calling 019682644 or emailing us at info@skillcourses.ie</div>
                    </div>

                    <div class="actionAccordion">
                        <div class="accordionButton">I’ve forgotten my password.</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">To reset your password please click this link <br> Click the link in the email to access your training or you can create a new password in "Profile" section. If you do not receive an email within 5 minutes, please click the re-send email link below.</div>
                    </div>


                    <div class="actionAccordion">
                        <div class="accordionButton">I’m having problems completing my training.</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">If you are experiencing issues completing your course we recommend clearing your cache, which you can do on your browser. In most cases when you log back into your account you will be able to proceed without issue. If this doesn’t work and you’re still experiencing problems then please get in touch with our Support Team by calling 019682644 or emailing us at info@skillcourses.ie For the best experience we recommend completing our training using Google Chrome.</div>
                    </div>
                </div>
            </div>


            <div class="faqBox">
                <div class="faqHeader">
                    <img src="{{asset("images/icons/sunny.png")}}" alt="">
                    <div class="faqTitle"> Logging in</div>
                </div>
                <div class="innerFaq">
                    <div class="actionAccordion">
                        <div class="accordionButton">If I fail the course assessment, can I do it again?</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText"> Yes. If you don’t pass, don’t worry! You can take the assessment as many times as you need with no extra charge.</div>
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
                        <div class="accordionButton">I’ve lost my certificate, how can I get another?</div>
                        <div id="uppDownArrow">
                            <svg id="dropArrow" class=" dropArrow svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>
                    </div>
                    <div class="accordionContent">
                        <div class="accText">You can login to your training account and download a PDF replacement at any time for free.</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
