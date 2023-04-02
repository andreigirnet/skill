(function(){
    let stripe = Stripe('pk_test_51MoxgFKyjQemDeuHOJQ6kvDFCKPiLAxvhGnnMqnv3ycR7HRUK5bgX2AYLhQ0bARRVBAdoUQPZWldyGYymAraOl9000Xsl5oowt');
    let elements = stripe.elements();
    let style = {
        base:{
            color: '#32325d',
            lineHeight: '18px',
            fontFamily: '"Roboto", Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };
    let card = elements.create('card', {
        style: style,
        hidePostalCode: true
    });
    card.mount('#payment-element');
    card.addEventListener('change', function(event) {
        let displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });
    let form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        // Disable the submit button to prevent repeated clicks
        document.getElementById('complete-order').disabled = true;
        //var options = {
        //     name: document.getElementById('name_on_card').value,
        //     address_line1: document.getElementById('address').value,
        //    address_city: document.getElementById('city').value,
        //    address_state: document.getElementById('province').value,
        //     address_zip: document.getElementById('postalcode').value
        // }
        stripe.createToken(card).then(function(result) {
            if (result.error) {
                // Inform the user if there was an error
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
                document.getElementById('complete-order').disabled = false;
            } else {
                // Send the token to your server
                stripeTokenHandler(result.token);
            }
        });
    });
    function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);
        // Submit the form
        form.submit();
    }
})();
