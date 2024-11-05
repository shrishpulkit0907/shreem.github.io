(function($) {
    $.fn.validateForm = function(rules) {
        return this.each(function() {
            var $form = $(this);
            $form.on('submit', function(event) {
                event.preventDefault(); // Prevent form submission
                // Clear any previous error messages
                $form.find('.error-message').remove();
                // Validate form fields
                var isValid = true;
                $.each(rules, function(fieldName, rule) {
                    var $field = $form.find('[name="' + fieldName + '"]');
                    var value = $field.val();
                    if (rule.required && !value) {
                        $field.after('<div class="error-message invalid-feedback d-block">' + rule.message + '</div>');
                        isValid = false;
                    }
                });
                // If form is valid, submit it
                if (isValid) {
                    $form.unbind('submit').submit(); // Unbind validateForm handler and submit the form
                    // ajax submit
                    $.ajax({
                        type:"post",
                        url:'',
                        data:$form.serialize(),
                        success:function(response){
                            alert(response);
                        }
                    });
                    // ajax submit
                }
            });
        });
    };
})(jQuery);


// Define a generic validation function



