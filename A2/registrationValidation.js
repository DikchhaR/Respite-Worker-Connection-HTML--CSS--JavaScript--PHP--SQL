document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById('registerForm');

    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent the form from submitting by default

        // Reset the error messages
        clearErrorMessages();

        // Validate form fields
        var isValid = true;

        // User Name validation
        var usernameField = document.getElementById('username');
        var usernameValue = usernameField.value.trim();
        if (usernameValue.length === 0) {
            addErrorMessage(usernameField, 'Error: User Name is required.');
            isValid = false;
        }

        // Password validation
        var passwordField = document.getElementById('pass');
        var passwordValue = passwordField.value.trim();
        if (passwordValue.length === 0) {
            addErrorMessage(passwordField, 'Error: Password is required.');
            isValid = false;
        }

        // Re-type Password validation
        var retypePasswordField = document.getElementById('pass2');
        var retypePasswordValue = retypePasswordField.value.trim();
        if (retypePasswordValue.length === 0 || retypePasswordValue !== passwordValue) {
            addErrorMessage(retypePasswordField, 'Error: Passwords do not match.');
            isValid = false;
        }

        // Email Address validation
        var emailField = document.getElementById('email');
        var emailValue = emailField.value.trim();
        if (emailValue.length === 0 || !isValidEmail(emailValue)) {
            addErrorMessage(emailField, 'Error: Enter a valid email address.');
            isValid = false;
        }

        // Gender validation
        var genderField = document.querySelector('input[name="gender"]:checked');
        if (!genderField) {
            addErrorMessage(document.getElementById('gender'), 'Error: Select your gender.');
            isValid = false;
        }

        // Language validation
        var languageField = document.getElementById('language');
        var languageValue = languageField.value.trim();
        if (languageValue.length === 0) {
            addErrorMessage(languageField, 'Error: Select a language.');
            isValid = false;
        }

        // Age Range validation
        var ageField = document.getElementById('age');
        var ageValue = ageField.value.trim();
        if (ageValue.length === 0) {
            addErrorMessage(ageField, 'Error: Select your age range.');
            isValid = false;
        }

        // Related Experience validation
        var experienceField = document.getElementById('experience');
        var experienceValue = experienceField.value.trim();
        if (experienceValue.length === 0) {
            addErrorMessage(experienceField, 'Error: Enter your related experience.');
            isValid = false;
        }

        // Terms and Conditions validation
        var termsCheckbox = document.getElementById('terms');
        if (!termsCheckbox.checked) {
            addErrorMessage(termsCheckbox, 'Agree to the terms and conditions.');
            isValid = false;
        }

        if (!isValid) {
            return false; // Prevent form submission if any field is invalid
        }

        // If all validations pass, submit the form
        form.submit();
    });

    function addErrorMessage(field, message) {
        var errorMessage = document.createElement('p');
        errorMessage.className = 'error';
        errorMessage.textContent = message;
        field.parentNode.appendChild(errorMessage);
    }

    function clearErrorMessages() {
        var errors = document.querySelectorAll('.error');
        errors.forEach(function (error) {
            error.remove();
        });
    }

    function isValidEmail(email) {
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
});
