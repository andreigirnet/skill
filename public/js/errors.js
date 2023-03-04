const errorDiv = document.getElementById('errorDiv');
const success = document.getElementsByClassName('success-message');
console.log(success);
function hideDiv(){
    errorDiv.style.display = 'none';
}
function hideSuccess(){
    success[0].style.display = 'none';
}

setTimeout(hideDiv, 5000)
setTimeout(hideSuccess, 5000)
