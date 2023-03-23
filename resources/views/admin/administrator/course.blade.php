@extends('admin.administrator.layout')
@section('adminPages')

    <div class="dashWrapper" x-data="{
            slideCounter: 0,
            language:'english',
            stage: 1,
            courses:'',
            setLanguage: function(lang){
                this.language = lang
                this.getCourseItems()
            },
             getLength: function(stage){
                if(stage === 1){
                    return Object.keys(this.courses.stage_1).length
                }
            },
             nextSlide: function(){
                let slider = document.getElementById('courseSlider');
                this.slideCounter += 1310;
                let maxPosition = 1310 * this.getLength(this.stage)-1;
                if(this.slideCounter <= maxPosition){
                    slider.style.right = this.slideCounter + 'px';
                }else{
                    this.slideCounter = 0;
                    slider.style.right = 0 + 'px';
                    this.stage+=1
                }
            },
            prevSlide: function(){
                let slider = document.getElementById('courseSlider');
                this.slideCounter -= 1310;
                let minPosition = 1310;
                if(this.slideCounter >= minPosition){
                    slider.style.right = this.slideCounter + 'px';
                }else{
                    this.slideCounter = 0;
                    slider.style.right = 0 + 'px';
                    this.stage-=1
                }
            },
            setStage: function(stage){
                this.stage = stage
            },
            getCourseItems: function(){
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
                    <div class="progresItem" @click="setStage(1)">1</div>
                    <div class="progresItem" @click="setStage(2)">2</div>
                    <div class="progresItem" @click="setStage(3)">3</div>
                    <div class="progresItem" @click="setStage(4)">4</div>
                    <div class="progresItem" @click="setStage('test')">Test</div>
                </div>
                <div class="courseContainer">
                    <div class="courseSlider" id="courseSlider">
                        <div class="courseStage" x-show="stage === 1">
                            <template x-for="slide in courses.stage_1">
                                <div class="slide" x-bind:style="'background-image: url(../..' + slide.img + '); background-size: cover;'">
                                    <div class="slideAnswer"></div>
                                    <div class="slideContent">
                                        <div class="slideTitle" x-text="slide.title"></div>
                                        <div class="slideSubText" x-text="slide.content"></div>
                                        <template x-for="bullet in slide.bullets">
                                            <div class="bulletText" x-text="bullet"></div>
                                        </template>
                                    </div>
                                    <div class="showAnswer" x-show="slide.answer">showAnswer</div>
                                </div>
                            </template>
                        </div>
                        <div class="courseStage" x-show="stage === 2">
                            <template x-for="slide in courses.stage_2">
                                <div class="slide"></div>
                            </template>
                        </div>
                        <div class="courseStage" x-show="stage === 3">
                            <template x-for="slide in courses.stage_3">
                                <div class="slide"></div>
                            </template>
                        </div>
                        <div class="courseStage" x-show="stage === 4">
                            <template x-for="slide in courses.stage_4">
                                <div class="slide"></div>
                            </template>
                        </div>
                        <div class="courseStage" x-show="stage === 'test'">
                            <template x-for="slide in courses.test">
                                <div class="slide"></div>
                            </template>
                        </div>
                    </div>
                </div>
                <div class="navButtons">
                    <div class="navButton" @click="prevSlide">Previous</div>
                    <div class="navButton" @click="nextSlide">Next</div>
                </div>
            </div>
    </div>
    <script src="{{asset('js/course.js')}}" defer></script>
    <script src="//unpkg.com/alpinejs" defer></script>
@endsection
