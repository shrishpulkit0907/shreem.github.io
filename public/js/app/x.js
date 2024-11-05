$(document).ready(function() {
    var loginFormRules = {
        rules:{
            phone:{
                required: true,
                minlength: 10,
                maxlength: 10,
                number:true
            }
        },
        messages:{          
            phone:{
                required:"Please enter phone number",
                number:"Please enter number only",
                minlength:"Please enter a min 10 digit-",
                maxlength:"Please enter a max 10 digit--",
            },
        },
    };
    
    function validateInput(input) {
        var textvalue=input.val();
        var fieldName = input.attr('name');
        var rules = loginFormRules.rules[fieldName];
        var errorMessages = {};
        for (var ruleName in rules) {
            var ruleValue = rules[ruleName];
            var fieldNameErrorMessages = errorMessages[fieldName] || {};
            switch (ruleName) {
                case 'number':
                    if (ruleValue && (textvalue.length !== 10 || !$.isNumeric(textvalue))) {
                        fieldNameErrorMessages['number'] = loginFormRules.messages[fieldName].number || "Please enter numbers only.";
                    }
                case 'required':
                    if (ruleValue && textvalue.trim() === '') {
                        fieldNameErrorMessages['required'] = loginFormRules.messages[fieldName].required || "Please enter some value.";
                    }
                case 'minlength':
                    if (ruleValue && textvalue.length < parseInt(ruleValue)) {
                        isValid = false;
                        fieldNameErrorMessages['minlength'] = loginFormRules.messages[fieldName].minlength || "Minimum length should be " + minlength + " characters.";
                    }
                    break;
                case 'maxlength':
                    if (ruleValue && textvalue.length > parseInt(ruleValue)) {
                        isValid = false;
                        fieldNameErrorMessages['maxlength'] = loginFormRules.messages[fieldName].maxlength || "Maximum length should be " + maxlength + " characters.";
                    }
                    break;            
            }
            errorMessages[fieldName] = fieldNameErrorMessages;
        }        
    }

    $('form input').on('input change blur', function(e) {
        var input = $(this);
        var errorMessage=validateInput(input);
    });
  });