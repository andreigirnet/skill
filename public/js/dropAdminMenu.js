const employerTriggerNav = document.getElementById('employersNavButton');
const billingTriggerButton = document.getElementById('billingNavButton');
const dropEmployerDiv = document.getElementById('employersDrop');
const dropBillingDiv = document.getElementById('billingDrop');

let showEmployer = false;
let showBilling = false;

employerTriggerNav.addEventListener('click', ()=>{
    if(showEmployer === false){
        dropEmployerDiv.style.display = 'flex';
        showEmployer = true;
    }else{
        dropEmployerDiv.style.display = 'none';
        showEmployer = false;
    }
})

billingTriggerButton.addEventListener('click', ()=>{
    if(showBilling === false){
        dropBillingDiv.style.display = 'flex';
        showBilling = true;
    }else{
        dropBillingDiv.style.display = 'none';
        showBilling = false;
    }
})
