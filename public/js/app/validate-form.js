$(function () {
    // Wrap your code inside document ready function
    (function ($) {
        $.fn.validateForm = function (rules) {
            return this.each(function () {
                var $form = $(this);
                // Use on() method to attach event handler
                $form.on('submit', function (event) {
                    event.preventDefault(); // Prevent form submission
                    // Clear any previous error messages
                    $form.find('.error-message').remove();
                    // Validate form fields
                    var isValid = true;
                    $.each(rules, function (fieldName, rule) {
                        var $field = $form.find('[name="' + fieldName + '"]');
                        var value = $field.val();
                        if (rule.required && !value) {
                            $field.after('<div class="error-message invalid-feedback d-block">' + rule.message + '</div>');
                            isValid = false;
                        }
                    });
                    // If form is valid, submit it
                    if (isValid) {
                        var csrfToken = $('meta[name="csrf-token"]').attr('content');
                        $.ajax({
                            type: "post",
                            url: $form.attr('action'),
                            headers: {
                                'X-CSRF-TOKEN': csrfToken // Include CSRF token in headers
                            },
                            data: $form.serialize(),
                            success: function (response) {
                                if (response.success) {
                                    window.location.href = response.redirect;
                                }
                                else {
                                        alert(response.message);
                                }

                            },
                            error: function (xhr, status, error) {
                                console.error('AJAX error:', error);
                            }
                        });
                    }
                });
            });
        };
    })(jQuery);
});
