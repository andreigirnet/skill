const MAX_COUNT_CUSTOMERS = 21235; // Set the maximum count value
const MAX_COUNT_CERTIFICATES = 20789; // Set the maximum count value
const MAX_COUNT_INSTRUCTORS = 9; // Set the maximum count value
let counterElementCustomers = document.getElementById("customersCounter");
let counterElementCertificates = document.getElementById("certificatesCounter");
let counterElementInstructors = document.getElementById("instructorsCounter");
let counterValueCustomers = 0;
let counterValueCertificates = 0;
let counterValueInstructors = 0;
let customersIntervalId;
let certificatesIntervalId;
let instructorsIntervalId;

function incrementCounterCustomers() {
    counterValueCustomers+=20;
    counterElementCustomers.textContent = counterValueCustomers;

    if (counterValueCustomers > MAX_COUNT_CUSTOMERS) {
        clearInterval(customersIntervalId); // Stop the counter
    }
}

function incrementCounterCertificates() {
    counterValueCertificates+=20;
    counterElementCertificates.textContent = counterValueCertificates;

    if (counterValueCertificates > MAX_COUNT_CERTIFICATES) {
        clearInterval(certificatesIntervalId); // Stop the counter
    }
}

function incrementCounterInstructors() {
    counterValueInstructors+=1;
    counterElementInstructors.textContent = counterValueInstructors;

    if (counterValueInstructors > MAX_COUNT_INSTRUCTORS) {
        clearInterval(instructorsIntervalId); // Stop the counter
    }
}

customersIntervalId = setInterval(incrementCounterCustomers, 0.00001);
certificatesIntervalId = setInterval(incrementCounterCertificates, 0.00001);
instructorsIntervalId = setInterval(incrementCounterInstructors, 200);

