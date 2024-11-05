$(document).ready(function() {
    var loginFormRules = {
        rules: {
            receivername: {
                required: true,
                minlength: 3,
            },
            dateofarrival: {
                required: true,
                date: true
            },
            dateofstart: {
                required: true,
                date: true
            },
            sendername: {
                required: true,
                minlength: 3,
            },
            amount: {
                required: true,
                minlength: 1,
                number: true
            },
            accountnumber: {
                required: true,
                minlength: 6,
                number: true
            },
            phone: {
                required: true,
                minlength: 10,
                maxlength: 10,
                number: true
            },
            email:{
                required: true,
                email: true,
            },
            password: {
                required: true,
                minlength: 3,
            },
            city: {
                required: true,
            },
            fav:{
                required_radio:true,
            },
            dateOfBirth: {
                date: true
            },
            timeOfBirth: {
                time: true
            }
        },
        messages: {
            receivername: {
                required: "Receiver required",
                minlength: "Please enter a minimum of 3 characters",
            },
            dateofarrival: {
                required: "Date of arrival required",
                date: "Please enter a valid date (YYYY-MM-DD format)"
            },
            dateofstart: {
                required: "Start date required",
                date: "Please enter a valid date (YYYY-MM-DD format)"
            },
            sendername: {
                required: "Sender required",
                minlength: "Please enter a minimum of 3 characters",
            },
            amount: {
                required: "Amount required",
                number: "Please enter numbers only",
                minlength: "Please enter a minimum of 1 digits",
            },
            accountnumber:{
                required: "Account number required",
                number: "Please enter numbers only",
                minlength: "Please enter a minimum of 6 digits",
            },
            phone: {
                required: "Phone number is required",
                number: "Please enter numbers only",
                minlength: "Please enter a minimum of 10 digits",
                maxlength: "Please enter a maximum of 10 digits"
            },
            email:{
                required:"Email is required",
                email:"Please enter a valid email"
            },
            password:{
                required:"Password is required",
                minlength:"Please enter a min 3 char password"
            },
            city:{
                required:"City is required",
            },
            fav:{
                required_radio:"Language is required",
            },
            dateOfBirth: {
                date: "Please enter a valid date (YYYY-MM-DD format)"
            },timeOfBirth: {
                time: "Please enter a valid time (format)"
            }
        }
    };

    function validateInput(input) {
        var textvalue = input.val();
        var fieldName = input.attr('name');
        var rules = loginFormRules.rules[fieldName];
        var errorMessages = [];
        for (var ruleName in rules) {
            var ruleValue = rules[ruleName];
            switch (ruleName) {
                case 'number':
                    var numberRegex = /^\d+$/;
                    if (ruleValue && !numberRegex.test(textvalue)) {
                        errorMessages.push(loginFormRules.messages[fieldName].number || "Please enter numbers only.");
                    }
                    break;
                case 'required':
                    if (ruleValue && (textvalue.trim() === '')) {
                        errorMessages.push(loginFormRules.messages[fieldName].required || "Please enter some value.");
                    }
                    break;
                case 'required_radio':
                    if (!$('input[type="radio"]:checked').length) {
                        // console.log(loginFormRules.messages);
                        errorMessages.push(loginFormRules.messages[fieldName].required_radio || "Please enter some value.");
                    }
                    break;
                case 'minlength':
                    if (ruleValue && textvalue.length < parseInt(ruleValue)) {
                        errorMessages.push(loginFormRules.messages[fieldName].minlength || "Minimum length should be " + ruleValue + " characters.");
                    }
                    break;
                case 'maxlength':
                    if (ruleValue && textvalue.length > parseInt(ruleValue)) {
                        errorMessages.push(loginFormRules.messages[fieldName].maxlength || "Maximum length should be " + ruleValue + " characters.");
                    }
                    break;
                case 'email':
                    if (ruleValue) {
                        var emailRegex = /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/;
                        if (!emailRegex.test(textvalue)) {
                            errorMessages.push(loginFormRules.messages[fieldName].email || "Please enter a valid email.");
                        }
                    }
                    break;
                case 'date':
                    if (ruleValue) {
                        // Regular expression to match date in YYYY-MM-DD format
                        var dateRegex = /^\d{4}-\d{2}-\d{2}$/;
                        if (!dateRegex.test(textvalue)) {
                            errorMessages.push(loginFormRules.messages[fieldName].date || "Please enter a valid date (YYYY-MM-DD format).");
                        }
                    }
                    break;
                case 'time':
                    if (ruleValue) {
                        // Regular expression to match date in YYYY-MM-DD format
                        var timeRegex = /^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/;
                        if (!timeRegex.test(textvalue)) {
                            errorMessages.push(loginFormRules.messages[fieldName].time || "Please enter a valid time.");
                        }
                    }
                    break;
            }
        }
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

    $('form input,form select').on('input change blur', function(e) {
        // console.time('validateInput');
        var input = $(this);
        var errorMessage = validateInput(input);
        if (errorMessage.length > 0) {
            displayErrorMessage(input, errorMessage);
        } else {
            displayErrorMessage(input, []);
        }
        // console.timeEnd('validateInput');
    });

    $('transactionform').on('submit', function(e) {
        e.preventDefault();
        var form = $(this);
        var inputs = form.find('input, select'); // Include select elements for validation

        var errorMessages = {}; // Object to store error messages for each field

        // Iterate over each input field
        inputs.each(function() {
            var input = $(this);
            var fieldName = input.attr('name');
            var errorMessage = validateInput(input); // Validate the input

            // If there are validation errors, store them in the errorMessages object
            if (errorMessage.length > 0) {
                errorMessages[fieldName] = errorMessage;
            }
        });

        // Display error messages for each input field
        $.each(errorMessages, function(fieldName, messages) {
            var input = form.find('[name="' + fieldName + '"]');
            displayErrorMessage(input, messages);
        });

        // complete ajax call
        if (Object.keys(errorMessages).length === 0) {
            var formData = form.serialize();
            $.ajax({
                url: form.attr('action'),
                method: form.attr('method'),
                data: formData,
                success: function(response) {
                    // Handle success response
                    alert('Transaction created successfully!');
                    form[0].reset(); // Reset the form
                    form.find('.error-message').remove(); // Remove any error messages
                    window.location.replace(appconfig.transactions);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // Handle error response
                    alert('An error occurred: ' + textStatus);
                }
            });
        }
        // complete ajax call

    });


    $('#updatetransactionform').on('submit', function(e) {
        e.preventDefault();
        var form = $(this);
        var inputs = form.find('input, select'); // Include select elements for validation

        var errorMessages = {}; // Object to store error messages for each field

        // Iterate over each input field
        inputs.each(function() {
            var input = $(this);
            var fieldName = input.attr('name');
            var errorMessage = validateInput(input); // Validate the input

            // If there are validation errors, store them in the errorMessages object
            if (errorMessage.length > 0) {
                errorMessages[fieldName] = errorMessage;
            }
        });

        // Display error messages for each input field
        $.each(errorMessages, function(fieldName, messages) {
            var input = form.find('[name="' + fieldName + '"]');
            displayErrorMessage(input, messages);
        });

        // complete ajax call
        if (Object.keys(errorMessages).length === 0) {
            var formData = form.serialize();
            $.ajax({
                url: form.attr('action'),
                method: form.attr('method'),
                data: formData,
                success: function(response) {
                    // Handle success response
                    alert('Transaction updated successfully!');
                    form[0].reset(); // Reset the form
                    form.find('.error-message').remove(); // Remove any error messages
                    window.location.replace(appconfig.transactions);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // Handle error response
                    alert('An error occurred: ' + textStatus);
                }
            });
        }
        // complete ajax call

    });

});
