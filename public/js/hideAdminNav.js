let hideNavButton = document.getElementById('hideNavDiv');
let hideShowMessage = document.getElementById('hideNavMessage');
let hideImg = document.getElementById('hideImg');
let sideNav = document.getElementById('side');
let message = "Hide Nav Bar";
let hide = false;
window.addEventListener('load', function (){
    hideShowMessage.innerHTML = message
})
hideNavButton.addEventListener('click', function(){
    hide = !hide;
    if (hide === true){
        sideNav.style.display = 'none';
        hideImg.style.transform = 'rotate(180deg)'
        message = "Show Nav bar"
        hideShowMessage.innerHTML = message
    }else{
        sideNav.style.display = 'block'
        hideImg.style.transform = 'rotate(0deg)'
        message = "Hide Nav Bar";
        hideShowMessage.innerHTML = message
    }
})
