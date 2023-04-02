@extends('admin.administrator.layout')
@section('adminPages')
<div class="dashWrapper" x-data="{
            showHideContent: true,
            showStartTest: true,
            message: '',
            testAnswers: 0,
            certificateButton: false,
            tryAgainButton: false,
            slideCounter: 0,
            selectedAnswer:'',
            language:'english',
            isActive:1,
            answer: false,
            stage: 1,
            courses:'',
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
            submitAnswer: function(answer)
            {
                if(this.selectedAnswer.length > 0)
                {
                    if(this.selectedAnswer === answer)
                    {
                        this.testAnswers++;
                    }
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
               if(this.testAnswers > 6){
                    this.tryAgainButton = false;
                    this.certificateButton = true;
               }else
               {
                    this.tryAgainButton = true;
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
                        console.log(this.courses)
                    }).catch(error => {
                        console.error(error);
                    });
                }else if(this.language === 'russian')
                {
                    axios.get('../data/course.json').then(response => {
                        this.courses = response.data.russian
                        console.log(this.courses)
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
                        console.log(this.courses)
                    }).catch(error => {
                        console.error(error);
                    });
                }
            }
        }"
         x-init="getCourseItems">
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
                    <div class="progresItem" @click="setStage(3)" x-bind:class="{ 'isActiveClass': isActive === 3 }" >3</div>
                    <div class="progresItem" @click="setStage(4)" x-bind:class="{ 'isActiveClass': isActive === 4 }">4</div>
                    <div class="progresItem" @click="setStage('test')" x-bind:class="{ 'isActiveClass': isActive === 'test' }">Test</div>
                </div>
                <div class="courseContainer">
                    <img id="eyeIcon" @click="showHideSlide" src="{{asset('images/icons/eye.png')}}" alt="Show hide image">
                    <div class="courseSlider" id="courseSlider">
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
                                        <template x-for="bullet in slide.bullets">
                                            <div class="bulletPoint">
                                                <input type="radio" name="answer" x-model="selectedAnswer" x-bind:value="bullet">
                                                <div class="bulletText" x-text="bullet" ></div>
                                            </div>
                                        </template>
                                        <div x-show="slide.answer" @click="submitAnswer(slide.answer)" class="submitTestQuesstion">Next</div>
                                        <div x-show="showStartTest" @click="startTest" class="submitTestQuesstion">Start Test</div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
                <div class="navButtons">
                    <div class="navButton" x-show="stage !== 'test'" @click="prevSlide">Previous</div>
                    <template x-if="certificateButton">
                        <div class="tryAgainDiv">
                            <div class="succesTest">You have passed the test:</div>
                            <form action="{{route('certificate.store', $packagesOwnedByUser[0]->id)}}" method="POST">
                                @csrf
                                <button type="submit" class="downCertificate">Downloand Certificate</button>
                            </form>
                        </div>
                    </template>
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
