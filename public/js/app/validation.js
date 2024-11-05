
var validationRules = {
    'email': {
        'required': true,
        'message': 'Please enter a valid email address',
    },
    'password': {
        'required': true,
        'message': 'Please enter your password'
    }
};

  // Attach event listeners for change and blur events
  $.each(validationRules, function(field, rule) {
    if (field && validationRules[field]) {
        $('#' + field).on('change blur', function() {
            validateField(field, rule);
        });
    }    
});

 // Function to validate a single field
 function validateField(field, rule) {
    var value = $('#' + field).val();
    if (rule.required && !value) {
        $('#' + field).siblings('.error-message').remove();
        $('#' + field).after('<div class="error-message invalid-feedback d-block">' + rule.message + '</div>');
    } else {
        $('#' + field).siblings('.error-message').remove();
    }
}


    // Form submission
    $('#loginform').submit(function(event) {
        event.preventDefault(); // Prevent form submission
        
        // Clear any previous error messages
        $('.error-message').remove();
        
        // Validate form fields
        var isValid = true;
        $(this).find(".loginbutton").hide();
       $(this).find(".loader").show();
       $.each(validationRules, function(field, rule) {
           isValid = isValid && validateField(field, rule);
       });
       
       alert();
       console.log(isValid);
       if (!isValid) {
           $(this).find(".loginbutton").show();
           $(this).find(".loader").hide();
           return false; // Stop form submission if validation fails
       }
       var csrfToken = $('meta[name="csrf-token"]').attr('content');
   
       // Get form data
       var formData = $(this).serialize();
   
       // Perform AJAX request
       $.ajax({
           type: 'POST',
           url: "{{ route('login') }}",
           headers: {
               'X-CSRF-TOKEN': csrfToken // Include CSRF token in headers
           },
           data: formData,
           success: function(response) {
               // Redirect to dashboard on successful login
               window.location.href = response.redurl;
           },
           error: function(xhr, status, error) {
               var errors = xhr.responseJSON.errors;
   
               // Display validation errors
               $.each(errors, function(key, value) {
                   $('#' + key).after('<div class="error-message d-block">' + value[0] + '</div>');
               });
           }
       });
   });s