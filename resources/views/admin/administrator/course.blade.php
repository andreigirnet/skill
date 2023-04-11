@extends('admin.administrator.layout')
@section('adminPages')
    <div class="dashWrapper" x-data="{
            correctAnswers: [3,3,2,2,3,2,3,1,3,3],
            certificateButton: false,
            showEye: true,
            showSlider: true,
            showModal: false,
            submittedAnswers: [],
            showHideContent: true,
            showStartTest: true,
            message: '',
            testAnswers: 0,
            tryAgainButton: false,
            slideCounter: 0,
            selectedAnswer:'',
            language:'english',
            isActive:1,
            answer: false,
            stage: 1,
            courses:'',
            video: false,
            showVideo: function(){
                this.showSlider = false;
                this.showModal = false;
                this.showEye = false;
                this.video = true;
                let videoPractice = document.getElementById('practiceVideo');
                videoPractice.onended = (event) => {
                  console.log(
                    'Video stopped either because it has finished playing or no further data is available.'
                );
                    this.certificateButton = true
                };
                console.log(this.certificateButton);
            },
            showHideSlide: function(){
                this.showHideContent = !this.showHideContent
            },
            setLanguage: function(lang)
            {
                this.language = lang
                this.getCourseItems()
            },
            startTest: function()
            {
               this.nextSlide();
               this.showStartTest = false;
            },
            resetTest: function()
            {
                let slider = document.getElementById('courseSlider');
                this.slideCounter = 0;
                slider.style.right = 0 + 'px';
                this.testAnswers = 0;
                this.tryAgainButton = false;
                this.showStartTest = true;
            },
            submitAnswer: function()
            {
                if(this.selectedAnswer !== '')
                {
                    this.submittedAnswers.push(this.selectedAnswer)
                    this.nextSlide();
                    this.message = '';
                    this.selectedAnswer = ''
                }else
                {
                        this.message = 'Select an answer to go to next question';
                }
            },
            checkResult: function()
            {
               if(this.submittedAnswers.length === 10){
                  let match = 0;
                  for(let i = 0; i<= this.submittedAnswers.length; i++)
                  {
                    if(this.submittedAnswers[i] === this.correctAnswers[i])
                    {
                      match++;
                    }
                  }
                  if(match > 7)
                  {
                    this.tryAgainButton = false;
                    this.showModal = true;
                    math = 0
                    this.showModal = true
                  }
                  else
                  {
                    this.tryAgainButton = true;
                    match = 0;
                  }
               }
            },
            toggleAnswer: function(){
                this.answer = !this.answer
            },
            getLength: function(stage)
            {
                if(stage === 1)
                {
                    return Object.keys(this.courses.stage_1).length
                }else if(stage === 2)
                {
                       return Object.keys(this.courses.stage_2).length
                }else if(stage === 3)
                {
                    return Object.keys(this.courses.stage_3).length
                }else if(stage === 4)
                {
                    return Object.keys(this.courses.stage_4).length
                }else
                {
                    return Object.keys(this.courses.test).length
                }
            },
             nextSlide: function()
             {
                this.answer = false
                let slider = document.getElementById('courseSlider');
                this.slideCounter += 1310;
                let maxPosition = 1310 * this.getLength(this.stage)-1;
                if(this.slideCounter <= maxPosition){
                    slider.style.right = this.slideCounter + 'px';
                }else{
                    if(this.stage === 'test'){
                        this.checkResult();
                    }
                    this.slideCounter = 0;
                    slider.style.right = 0 + 'px';
                }
            },
            prevSlide: function()
            {
                this.answer = false
                let slider = document.getElementById('courseSlider');
                this.slideCounter -= 1310;
                let minPosition = 1310;
                if(this.slideCounter >= minPosition){
                    slider.style.right = this.slideCounter + 'px';
                }else{
                    this.slideCounter = 0;
                    slider.style.right = 0 + 'px';
                }
            },
            setStage: function(stage)
            {
                this.stage = stage
                this.isActive = stage
                let slider = document.getElementById('courseSlider');
                slider.style.right = 0 + 'px';
                if(stage === 'test'){
                    this.showStartTest = true;
                    this.tryAgainButton = false;
                }
                 this.slideCounter = 0;
                 slider.style.right = 0 + 'px';
            },
            getCourseItems: function()
            {
                if(this.language === 'english')
                {
                    axios.get('../data/course.json').then(response => {
                        this.courses = response.data.english
                    }).catch(error => {
                        console.error(error);
                    });
                }else if(this.language === 'spanish')
                {
                    axios.get('../data/course.json').then(response => {
                        this.courses = response.data.spanish

                    }).catch(error => {
                        console.error(error);
                    });
                }else if(this.language === 'russian')
                {
                    axios.get('../data/course.json').then(response => {
                        this.courses = response.data.russian

                    }).catch(error => {
                        console.error(error);
                    });
                }else if(this.language === 'romanian')
                {
                    axios.get('../data/course.json').then(response => {
                        this.courses = response.data.romanian
                        console.log(this.courses)
                    }).catch(error => {
                        console.error(error);
                    });
                }else
                {
                    axios.get('../data/course.json').then(response => {
                        this.courses = response.data.polish

                    }).catch(error => {
                        console.error(error);
                    });
                }
            }
        }"
         x-init="getCourseItems">
        <div class="modalCourseComplete" x-show="showModal">
            <div class="modalTitle">IMPORTANT</div>
            <div class="modalText">Please notice, if you don't book your self assessment with our team as required, your certificate is not fully validated and might not be accepted by your employer/company.
                This training is covering the full theory and practical part as required by Irish Legislation and regarding that you can use your certificate for any jobs for 3 years after the full course is completed.
                <br>

                <br>
                It is your responsibility to get in touch with our team as instructed (through WhatsApp chat on +353892777333 texts only) to organise the practical part for your Manual Handling Training a.s.a.p ( within 24-48hrs ) and to have your full course done. After that you will receive your certificate updated with the practical part information on it.
                Follow the information below regarding the self assessment and to download your first certificate that covers the theory part only and can be used for emergency purposes till you have the full certificate issued from our system.
                <br>
                <br>
                Kind Regards
            </div>
            <div class="modalTitle">Contact Us Via WhatsApp On this line</div>
            <div class="modalTitle">+353892777333 texts only</div>
            <div class="adminButton" style="display: flex; align-items: center; justify-content: center; margin-top: 20px" @click="showVideo">UNDERSTOOD</div>
        </div>
        <div class="coursePage">
            <div class="selectLang">
                <div class="langText">Pick a language: </div>
                <div class="langItem" @click="setLanguage('english')"><img src="{{asset('/images/flags/en.png')}}" alt=""></div>
                <div class="langItem" @click="setLanguage('polish')"><img src="{{asset('/images/flags/pl.png')}}" alt=""></div>
                <div class="langItem" @click="setLanguage('romanian')"><img src="{{asset('/images/flags/ro.png')}}" alt=""></div>
                <div class="langItem" @click="setLanguage('russian')"><img src="{{asset('/images/flags/ru.png')}}" alt=""></div>
                <div class="langItem" @click="setLanguage('spanish')"><img src="{{asset('/images/flags/sp.png')}}" alt=""></div>
            </div>
            <div class="progressBar">
                <div class="progresItem" @click="setStage(1)" x-bind:class="{ 'isActiveClass': isActive === 1 }">1</div>
                <div class="progresItem" @click="setStage(2)" x-bind:class="{ 'isActiveClass': isActive === 2 }">2</div>
                <div class="progresItem" @click="setStage(3)" x-bind:class="{ 'isActiveClass': isActive === 3 }">3</div>
                <div class="progresItem" @click="setStage(4)" x-bind:class="{ 'isActiveClass': isActive === 4 }">4</div>
                <div class="progresItem" @click="setStage('test')" x-bind:class="{ 'isActiveClass': isActive === 'test' }">Test</div>
            </div>
            <div class="courseContainer">
                <img id="eyeIcon" @click="showHideSlide" x-show="showEye" src="{{asset('images/icons/eye.png')}}" alt="Show hide image">
                <video autoplay muted controls class="practicalVideo" x-show="video" id="practiceVideo">
                    <source src="{{asset('video/practical.mp4')}}" type="video/mp4">
                </video>

                <div class="courseSlider" id="courseSlider" x-show="showSlider">
                    <div class="courseStage" x-show="stage === 1">
                        <template x-for="slide in courses.stage_1">
                            <div class="slide" x-bind:style="'background-image: url(../..' + slide.img + '); background-size: cover; background-repeat: no-repeat'">
                                <div class="slideAnswer" x-show="answer" x-text="slide.answer"></div>
                                <div class="slideContent" x-show="showHideContent">
                                    <div class="slideTitle" x-text="slide.title"></div>
                                    <div class="slideSubText" x-text="slide.content"></div>
                                    <template x-for="bullet in slide.bullets">
                                        <div class="bulletPoint">
                                            <img src="{{asset('images/arrows/right-yellow-arrow.png')}}" alt="">
                                            <div class="bulletText" x-text="bullet"></div>
                                        </div>
                                    </template>
                                </div>
                                <div class="showAnswer" x-show="slide.answer" @click="toggleAnswer">Show Answer</div>
                            </div>
                        </template>
                    </div>
                    <div class="courseStage" x-show="stage === 2">
                        <template x-for="slide in courses.stage_2">
                            <div class="slide" x-bind:style="'background-image: url(../..' + slide.img + '); background-size: cover;'">
                                <div class="slideAnswer" x-show="answer" x-text="slide.answer"></div>
                                <div class="slideContent" x-show="showHideContent">
                                    <div class="slideTitle" x-text="slide.title"></div>
                                    <div class="slideSubText" x-text="slide.content"></div>
                                    <template x-for="bullet in slide.bullets">
                                        <div class="bulletPoint">
                                            <img src="{{asset('images/arrows/right-yellow-arrow.png')}}" alt="">
                                            <div class="bulletText" x-text="bullet"></div>
                                        </div>
                                    </template>
                                </div>
                                <div class="showAnswer" x-show="slide.answer" @click="toggleAnswer">Show Answer</div>
                            </div>
                        </template>
                    </div>
                    <div class="courseStage" x-show="stage === 3">
                        <template x-for="slide in courses.stage_3">
                            <div class="slide" x-bind:style="'background-image: url(../..' + slide.img + '); background-size: cover;'">
                                <div class="slideAnswer" x-show="answer" x-text="slide.answer"></div>
                                <div class="slideContent" x-show="showHideContent">
                                    <div class="slideTitle" x-text="slide.title"></div>
                                    <div class="slideSubText" x-text="slide.content"></div>
                                    <template x-for="bullet in slide.bullets">
                                        <div class="bulletPoint">
                                            <img src="{{asset('images/arrows/right-yellow-arrow.png')}}" alt="">
                                            <div class="bulletText" x-text="bullet"></div>
                                        </div>
                                    </template>
                                </div>
                                <div class="showAnswer" x-show="slide.answer" @click="toggleAnswer">Show Answer</div>
                            </div>
                        </template>
                    </div>
                    <div class="courseStage" x-show="stage === 4">
                        <template x-for="slide in courses.stage_4">
                            <div class="slide" x-bind:style="'background-image: url(../..' + slide.img + '); background-size: cover;'">
                                <div class="slideAnswer" x-show="answer" x-text="slide.answer"></div>
                                <div class="slideContent" x-show="showHideContent">
                                    <div class="slideTitle" x-text="slide.title"></div>
                                    <div class="slideSubText" x-text="slide.content"></div>
                                    <template x-for="bullet in slide.bullets">
                                        <div class="bulletPoint">
                                            <img src="{{asset('images/arrows/right-yellow-arrow.png')}}" alt="">
                                            <div class="bulletText" x-text="bullet"></div>
                                        </div>
                                    </template>
                                </div>
                                <div class="showAnswer" x-show="slide.answer" @click="toggleAnswer">Show Answer</div>
                            </div>
                        </template>
                    </div>
                    <div class="courseStage" x-show="stage === 'test'">
                        <template x-for="slide in courses.test">
                            <div class="slide" x-bind:style="'background-image: url(../..' + slide.img + '); background-size: cover;'">
                                <div class="slideAnswer" x-show="answer" x-text="slide.answer"></div>
                                <div class="slideAnswer" x-show="message" x-text="message"></div>
                                <div class="slideContent" x-show="showHideContent">
                                    <div class="slideTitle" x-text="slide.title"></div>
                                    <div class="slideSubText" x-text="slide.content"></div>
                                    <template x-for="(bullet, index) in slide.bullets">
                                        <div class="bulletPoint">
                                            <input type="radio" name="answer" x-on:click="selectedAnswer = index + 1">
                                            <div class="bulletText" x-text="bullet" ></div>
                                        </div>
                                    </template>
                                    <div x-show="slide.answer" @click="submitAnswer()" class="submitTestQuesstion">Next</div>
                                    <div x-show="showStartTest" @click="startTest" class="submitTestQuesstion">Start Test</div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
            <div class="navButtons">
                <div class="navButton" x-show="stage !== 'test'" @click="prevSlide">Previous</div>
                <div class="tryAgainDiv" x-show="certificateButton">
                    <div class="succesTest">You have passed the test:</div>
                    <form action="{{route('certificate.store', $packagesOwnedByUser[0]->id)}}" method="POST">
                        @csrf
                        <button type="submit" class="downCertificate">Downloand Certificate</button>
                    </form>
                </div>
                <template x-if="tryAgainButton">
                    <div class="tryAgainDiv">
                        <div class="tryAgain">Please try Again you dit not pass:</div>
                        <div class="tryAgainButton" @click="resetTest">Try Again The Test</div>
                    </div>
                </template>
                <div class="navButton" x-show="stage !== 'test'" @click="nextSlide">Next</div>
            </div>
        </div>
    </div>
    <script src="{{asset("js/course.js")}}" defer></script>
    <script src="//unpkg.com/alpinejs" defer></script>
@endsection
