var paymentMethodRadios = document.getElementsByName("payment_option");
var selectedPaymentMethod = "";
for (var i = 0; i < paymentMethodRadios.length; i++) {
  paymentMethodRadios[i].addEventListener("change", function() {
    for (var j = 0; j < paymentMethodRadios.length; j++) {
      if (paymentMethodRadios[j].checked) {
        selectedPaymentMethod = paymentMethodRadios[j].value;
        break; // Exit the loop if a radio button is checked
      }
    }
    if (selectedPaymentMethod === "") {
      alert("Please select a payment method.");
    } 
    else if (selectedPaymentMethod === "Paytm") {
    
      document.getElementById("checkout-form").action = "http://127.0.0.1:8000/paytm-payment";
    } 
    else if (selectedPaymentMethod === "Google_Pay") {
      document.getElementById("checkout-form").action = "http://127.0.0.1:8000/google-pay-payment";
    }
    else if (selectedPaymentMethod === "COD") {
      document.getElementById("checkout-form").action = "http://127.0.0.1:8000/COD";
    }
  });
}


document.getElementById("checkout-form").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent form submission

  var selectedPaymentMethod = "";

  for (var i = 0; i < paymentMethodRadios.length; i++) {
    if (paymentMethodRadios[i].checked) {
      selectedPaymentMethod = paymentMethodRadios[i].attributes.value;
   
      break; // Exit the loop if a radio button is checked
    }
  }
  if (selectedPaymentMethod === "") {
    alert("Please select a payment method.");
  } else {
    // Payment method is selected, proceed with storing the data
    // You can perform your desired actions here, such as setting the form action

    if (selectedPaymentMethod === "Paytm") {
        document.getElementById("checkout-form").action = "http://127.0.0.1:8000/paytm-payment";
    } else if (selectedPaymentMethod === "Google_Pay") {
        document.getElementById("checkout-form").action = "http://127.0.0.1:8000/google-pay-payment";
    }
    else if (selectedPaymentMethod === "COD") {
        document.getElementById("checkout-form").action = "http://127.0.0.1:8000/COD";
      }
    // Submit the form
    document.getElementById("checkout-form").submit();
}


});