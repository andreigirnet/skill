const prev = document.getElementById('swiper-button-prev');
const next = document.getElementById('swiper-button-next');
let slides = document.querySelectorAll(".swiper-slide");
const swiperOver = document.getElementById("swiper-over");

let slideCounter = 0;

next.addEventListener("click", ()=>{
    if(slideCounter === (-200 * (slides.length-7))){
        slideCounter = 0;
    }else {
        slideCounter-=200;
    }
    swiperOver.style.left=slideCounter.toString() + "px";
})
prev.addEventListener("click", ()=>{
    if(slideCounter >= 0){
        slideCounter = 0;
    }else{
        slideCounter+=200;
    }
    swiperOver.style.left=slideCounter.toString() + "px";
})
