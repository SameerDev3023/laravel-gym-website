$(document).ready(function () {
    $("button").attr("id", "submit_button");
    let AllChildDivs = $(".form-group");
    let ExcludedNames = ["_token"];
    let buttonSubmit = $("#submit_button");
    var paymentMethodRadios = document.getElementsByName("payment_option");
    var selectedPaymentMethod = "";
    var InputValue;
    // buttonSubmit.addClass('disabled');

    buttonSubmit.click(function (e) {
        AllChildDivs.each(function () {
            let inputName = $(this).find("input").attr("name");
            InputValue = $(this).find("input").val();
            let NumberInput = $("#customer_number").val();
            console.log(NumberInput)
            if (InputValue == ""  ) {
                e.preventDefault();
            }
            let labelId = inputName + "_error_msg";
            var AppendIdHtml = "";
            if (!ExcludedNames.includes(inputName)) {
                // $(this).find("#" + labelId).remove();
                $(this)
                    .parent()
                    .find("label[id='" + labelId + "']")
                    .remove();
                if (inputName == "customer_name") {
                    if (InputValue == "") {
                        AppendIdHtml =
                            "<label id='" +
                            labelId +
                            "' style='color:red'>Please Enter Your Name</label>";
                        $(this).append(AppendIdHtml);
                    } else {
                        AppendIdHtml =
                            "<label id='" +
                            labelId +
                            "' style='color:red'></label>";
                        $(this).append(AppendIdHtml);
                    }
                }
                if (inputName == "customer_email") {
                    if (InputValue === "") {
                        AppendIdHtml =
                            "<label id='" +
                            labelId +
                            "' style='color:red'>Please Enter Your Email</label>";
                        $(this).append(AppendIdHtml);
                    } else if (!InputValue.includes("@gmail.com")) {
                        AppendIdHtml =
                            "<label id='" +
                            labelId +
                            "' style='color:red'>Please Enter Valid Email Address Add @ or gmail.com</label>";
                        $(this).append(AppendIdHtml);
                    } else {
                        AppendIdHtml =
                            "<label id='" +
                            labelId +
                            "' style='color:red'></label>";
                        $(this).append(AppendIdHtml);
                    }
                }
                if (inputName == "customer_number") {
                    if (InputValue == "") {
                        AppendIdHtml =
                            "<label id='" +
                            labelId +
                            "' style='color:red'>Please Enter Your  Number</label>";
                        $(this).append(AppendIdHtml);
                    } else if (InputValue.length != 10) {
                        AppendIdHtml =
                            "<label id='" +
                            labelId +
                            "' style='color:red'>Please Enter 10 digits number</label>";
                        $(this).append(AppendIdHtml);
                       e.preventDefault()
                    } else {
                        AppendIdHtml =
                            "<label id='" +
                            labelId +
                            "' style='color:red'></label>";
                        $(this).append(AppendIdHtml);
                    }
                    $("#customer_number").on("keydown", function (e) {
                        if (/^[a-zA-Z]$/.test(e.key)) {
                            alert(
                                "Please enter only numeric values for this field."
                            );
                            // Prevent form submission
                            return true;
                        }
                    });
                }

                if (inputName == "customer_country") {
                    if (InputValue == "") {
                        AppendIdHtml =
                            "<label id='" +
                            labelId +
                            "' style='color:red'>Please Enter Your Country Name</label>";
                        $(this).append(AppendIdHtml);
                    } else {
                        AppendIdHtml =
                            "<label id='" +
                            labelId +
                            "' style='color:red'></label>";
                        $(this).append(AppendIdHtml);
                    }
                }
                if (inputName == "customer_state") {
                    if (InputValue == "") {
                        AppendIdHtml =
                            "<label id='" +
                            labelId +
                            "' style='color:red'>Please Enter Your state Name</label>";
                        $(this).append(AppendIdHtml);
                    } else {
                        AppendIdHtml =
                            "<label id='" +
                            labelId +
                            "' style='color:red'></label>";
                        $(this).append(AppendIdHtml);
                    }
                }
                if (inputName == "customer_city") {
                    if (InputValue == "") {
                        AppendIdHtml =
                            "<label id='" +
                            labelId +
                            "' style='color:red'>Please Enter Your city Name</label>";
                        $(this).append(AppendIdHtml);
                    } else {
                        AppendIdHtml =
                            "<label id='" +
                            labelId +
                            "' style='color:red'></label>";
                        $(this).append(AppendIdHtml);
                    }
                }
                if (inputName == "Address") {
                    if (InputValue == "") {
                        AppendIdHtml =
                            "<label id='" +
                            labelId +
                            "' style='color:red'>Please Enter Your Address</label>";
                        $(this).append(AppendIdHtml);
                    } else {
                        AppendIdHtml =
                            "<label id='" +
                            labelId +
                            "' style='color:red'></label>";
                        $(this).append(AppendIdHtml);
                    }
                }
                if (inputName == "customer_pincode") {
                    if (InputValue == "") {
                        AppendIdHtml =
                            "<label id='" +
                            labelId +
                            "' style='color:red'>Please Enter Your  pincode</label>";
                        $(this).append(AppendIdHtml);
                    } else {
                        AppendIdHtml =
                            "<label id='" +
                            labelId +
                            "' style='color:red'></label>";
                        $(this).append(AppendIdHtml);
                    }
                }
            }
        });
    });

    for (var i = 0; i < paymentMethodRadios.length; i++) {
        paymentMethodRadios[i].addEventListener("change", function () {
            for (var j = 0; j < paymentMethodRadios.length; j++) {
                if (paymentMethodRadios[j].checked) {
                    selectedPaymentMethod = paymentMethodRadios[j].value;
                    console.log(selectedPaymentMethod);
                    break; // Exit the loop if a radio button is checked
                }
            }
            if (selectedPaymentMethod === "" && InputValue != "") {
                alert("Please select a payment method.");
            } else if (selectedPaymentMethod === "Paytm") {
                document.getElementById("checkout-form").action =
                    "http://127.0.0.1:8000/paytm-payment";
            } else if (selectedPaymentMethod === "Google_Pay") {
                document.getElementById("checkout-form").action =
                    "http://127.0.0.1:8000/google-pay-payment";
            } else if (selectedPaymentMethod === "COD") {
                document.getElementById("checkout-form").action =
                    "http://127.0.0.1:8000/COD";
            }
        });
    }
    buttonSubmit.click(function (e) {
        for (var i = 0; i < paymentMethodRadios.length; i++) {
            if (paymentMethodRadios[i].checked) {
                selectedPaymentMethod = paymentMethodRadios[i].attributes.value;
                break; // Exit the loop if a radio button is checked
            }
        }
        if (selectedPaymentMethod === "" && InputValue != "") {
            alert("Please select a payment method.");
        } else {
            if (selectedPaymentMethod === "Paytm") {
                document.getElementById("checkout-form").action =
                    "http://127.0.0.1:8000/paytm-payment";
            } else if (selectedPaymentMethod === "Google_Pay") {
                document.getElementById("checkout-form").action =
                    "http://127.0.0.1:8000/google-pay-payment";
            } else if (selectedPaymentMethod === "COD") {
                document.getElementById("checkout-form").action =
                    "http://127.0.0.1:8000/COD";
            }
        }
    });
});
