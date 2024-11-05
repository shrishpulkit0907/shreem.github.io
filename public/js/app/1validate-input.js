    $(document).ready(function() {
    var loginFormRules = {
        rules:{
            email:{
                required: true,
                minlength: 3,
                email: true,
            },
            password: {
                required: true,
                minlength: 3,
            },
            phone:{
                required: true,
                minlength: 10,
                maxlength: 10,
                number:true
            }
        },
        messages:{
            email:{
                required:"Please enter email address",
                email:"Please enter a valid email address"
            },
            password:{
                required:"Please enter password",
                minlength:"Please enter a min 3 char password"
            },
            phone:{
                required:"Please enter phone number",
                number:"Please enter number only",
                minlength:"Please enter a min 10 digit-",
                maxlength:"Please enter a max 10 digit--",
            },
        },
    };

    function validateTextbox(input) {
        var text = input.val();
        var fieldName = input.attr('name');
        var rules = loginFormRules.rules[fieldName];
        var errorMessage = "";
         
        // var isValid = true;

        // Check each rule
        for (var ruleName in rules) {
            var ruleValue = rules[ruleName];
            switch (ruleName) {
                case 'required':
                    if (ruleValue && text.trim() === '') {
                        // isValid = false;
                        // errorMessage = loginFormRules.messages[fieldName].required || "This field is required.";
                        errorMessages.push(loginFormRules.messages[fieldName].required || "This field is required.");
                    }
                    break;
                case 'number':
                    // if (ruleValue) {
                        // var numberRegex = /^\d+$/;
                        // if (!numberRegex.test(text)) {
                            // if (ruleValue && !$.isNumeric(text)) {
                                if (ruleValue && (text.length !== 10 || !$.isNumeric(text))) {
                            isValid = false;
                            // errorMessage = loginFormRules.messages[fieldName].number || "Please enter numbers only.";
                            errorMessages.push(loginFormRules.messages[fieldName].email || "Please enter a valid email address.");
                        }
                    // }
                    break;
                case 'email':
                    if (ruleValue) {
                        var emailRegex = /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/;
                        if (!emailRegex.test(text)) {
                            // isValid = false;
                            // errorMessage = loginFormRules.messages[fieldName].email || "Please enter a valid email address.";
                            errorMessages.push(loginFormRules.messages[fieldName].email || "Please enter a valid email address.");
                        }
                    }
                    break;
                case 'minlength':
                    if (ruleValue) {
                        var minLength = parseInt(ruleValue);
                        if (text.length < minLength) {
                            // isValid = false;
                            // errorMessage = loginFormRules.messages[fieldName].minlength || "Minimum length should be " + minLength + " characters.";
                            errorMessages.push(loginFormRules.messages[fieldName].minlength || "Minimum length should be " + minLength + " characters.");
                        }
                    }
                    break;

                case 'maxlength':
                    if (ruleValue) {
                        var maxLength = parseInt(ruleValue);
                        if (text.length > maxLength) {
                            // isValid = false;
                            // errorMessage = loginFormRules.messages[fieldName].maxlength || "Maximum length should be " + maxLength + " characters.";
                            errorMessages.push(loginFormRules.messages[fieldName].maxlength || "Maximum length should be " + maxLength + " characters.");
                        }
                    }
                    break;
                
                // Add more rules as needed
            }
            // If one rule fails, break the loop
            // if (!isValid) break;
        }
console.log(errorMessages);
        // return { isValid: isValid, errorMessage: errorMessage };
        return errorMessages;

    }

    function displayErrorMessage(input, messages) {
        // Remove any existing error messages
        input.nextAll('.error-message').remove();
        // Display new error messages if not empty
        if (messages.length > 0) {
            messages.forEach(function(message) {
                input.after('<div class="error-message invalid-feedback d-block">' + message + '</div>');
            });
        }
    }
    // Function to display error message
    // function displayErrorMessage(input, message) {
    //     input.next('.error-message').remove();
    //     if (message) {
    //         input.after('<div class="error-message invalid-feedback d-block">' + message + '</div>');
    //     }
    // }

    // Event listener for input, change, and blur events
    $('#loginform input').on('input change blur', function() {
        var input = $(this);
        // var validation = validateTextbox(input);
        var errorMessages = validateTextbox(input);

        // if (!validation.isValid) {
            if (errorMessages.length > 0) {
            // displayErrorMessage(input, validation.errorMessage);
            displayErrorMessage(input, errorMessages);

        } else {
            displayErrorMessage(input, []); // Clear error message
        }
    });

    // Event listener for form submission
    $('#loginform').submit(function(event) {
        event.preventDefault(); // Prevent default form submission

        var isValidForm = true;
        $('#loginform input').each(function() {
            var input = $(this);
            var validation = validateTextbox(input);

            if (!validation.isValid) {
                isValidForm = false;
                displayErrorMessage(input, validation.errorMessage);
            }
        });

        if (isValidForm) {
            // Perform form submission or other actions here
            console.log("Form submitted successfully!");
        }
    });
});
