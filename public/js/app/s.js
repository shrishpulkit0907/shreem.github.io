for (var ruleName in rules) {
    var ruleValue = rules[ruleName];
    switch (ruleName) {
        case 'required':
            if (ruleValue && text.trim() === '') {
                isValid = false;
                errorMessage = loginFormRules.messages[fieldName].required || "This field is required.";
            }
            break;
        case 'number':
            if (ruleValue && (text.length !== 10 || !$.isNumeric(text))) {
                isValid = false;
                errorMessage = loginFormRules.messages[fieldName].number || "Please enter numbers only.";
            }
            break;
        case 'email':
            if (ruleValue) {
                var emailRegex = /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/;
                if (!emailRegex.test(text)) {
                    isValid = false;
                    errorMessage = loginFormRules.messages[fieldName].email || "Please enter a valid email address.";
                }
            }
            break;
        case 'minlength':
            if (ruleValue) {
                var minLength = parseInt(ruleValue);
                if (text.length < minLength) {
                    isValid = false;
                    errorMessage = loginFormRules.messages[fieldName].minlength || "Minimum length should be " + minLength + " characters.";
                }
            }
            break;

        case 'maxlength':
            if (ruleValue) {
                var maxLength = parseInt(ruleValue);
                if (text.length > maxLength) {
                    isValid = false;
                    errorMessage = loginFormRules.messages[fieldName].maxlength || "Maximum length should be " + maxLength + " characters.";
                }
            }
            break;
    }
    // If one rule fails, break the loop
    if (!isValid) break;
}