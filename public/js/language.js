let showMenu = false;
let button = document.getElementById('dropLanguage');
let menuLanguage = document.getElementById('dropDownLanguage');
let selectedLanguage = document.getElementById('selectedLanguage');
let languagesToSelect = document.querySelectorAll('.dropdownLanguageItem');

button.addEventListener('click', function (){
    if (showMenu === false){
        showMenu = true;
        menuLanguage.style.display = 'flex';
    }else{
        menuLanguage.style.display = 'none';
        showMenu = false;
    }
})

// languagesToSelect.forEach((item)=>{
//     item.addEventListener('click', function(){
//         selectedLanguage.src = item.querySelector(':first-child').src;
//         menuLanguage.style.display = 'none';
//         showMenu = false;
//     })
// })
