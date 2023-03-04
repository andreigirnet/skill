const hamButton = document.getElementById("hamButton");
const responsiveMenu = document.getElementById("responsiveNav");
let show = false;

hamButton.addEventListener("click", () => {
   if (show === false){
       responsiveMenu.style.display = "flex";
       hamButton.style.transform = "rotate(90deg)";
       show = true;
   }else{
       responsiveMenu.style.display = "none";
       hamButton.style.transform = "rotate(0deg)";
       show = false;
   }
})
