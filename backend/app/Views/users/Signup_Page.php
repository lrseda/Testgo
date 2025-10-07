<!DOCTYPE html>
<html lang="en">
    <?= view('components/sp-head') ?>
<body>
    <div class="signup-container">
        <!-- Form Side -->
        <div class="signup-form">
            <div class="form-header">
                <h1>Create Account</h1>
                
            </div>

            <!-- Messages -->
            <div class="error-message" id="errorMessage">
                Please fix the errors below and try again.
            </div>
            <div class="success-message" id="successMessage">
                Account created successfully! Please check your email to verify your account.
            </div>

            <?= view('components/sp-signup-form') ?>

            <?= view('components/sp-social-buttons') ?>

            <?= view('components/sp-footer') ?>
        </div>

        <!-- Visual Side -->
        <div class="signup-visual">
            <a href="home.html" class="back-button">Back →</a>
            <div class="visual-icon">☕︎</div>
            <div class="visual-content">
                <h2>Signup Page</h2>
                
            </div>
        </div>
    </div>

    <script>
        let passwordVisible = {};

        function togglePassword(fieldId) {
            const passwordInput = document.getElementById(fieldId);
            const toggleIcon = passwordInput.nextElementSibling;
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.textContent = '🙈';
                passwordVisible[fieldId] = true;
            } else {
                passwordInput.type = 'password';
                toggleIcon.textContent = '👁️';
                passwordVisible[fieldId] = false;
            }
        }

        function checkPasswordStrength(password) {
            let score = 0;
            let feedback = 'Weak';
            
            // Length check
            if (password.length >= 8) score += 1;
            if (password.length >= 12) score += 1;
            
            // Character variety checks
            if (/[a-z]/.test(password)) score += 1;
            if (/[A-Z]/.test(password)) score += 1;
            if (/[0-9]/.test(password)) score += 1;
            if (/[^A-Za-z0-9]/.test(password)) score += 1;
            
            const strengthFill = document.getElementById('strengthFill');
            const strengthText = document.getElementById('strengthText');
            
            // Remove all strength classes
            strengthFill.className = 'strength-fill';
            
            if (score <= 2) {
                strengthFill.classList.add('strength-weak');
                feedback = 'Weak';
            } else if (score <= 3) {
                strengthFill.classList.add('strength-fair');
                feedback = 'Fair';
            } else if (score <= 4) {
                strengthFill.classList.add('strength-good');
                feedback = 'Good';
            } else {
                strengthFill.classList.add('strength-strong');
                feedback = 'Strong';
            }
            
            strengthText.textContent = `Password strength: ${feedback}`;
            return score;
        }

        function validateField(fieldId, validationFn, errorMsg, successMsg = '') {
            const field = document.getElementById(fieldId);
            const errorEl = document.getElementById(fieldId + 'Error');
            const successEl = document.getElementById(fieldId + 'Success');
            
            const isValid = validationFn(field.value);
            
            if (isValid) {
                field.classList.remove('error');
                field.classList.add('success');
                errorEl.style.display = 'none';
                if (successEl && successMsg) {
                    successEl.textContent = successMsg;
                    successEl.style.display = 'block';
                }
            } else {
                field.classList.remove('success');
                field.classList.add('error');
                errorEl.textContent = errorMsg;
                errorEl.style.display = 'block';
                if (successEl) {
                    successEl.style.display = 'none';
                }
            }
            
            return isValid;
        }

        // Real-time validation
        document.getElementById('firstName').addEventListener('blur', function() {
            validateField('firstName', 
                (value) => value.trim().length >= 2,
                'First name must be at least 2 characters'
            );
        });

        document.getElementById('lastName').addEventListener('blur', function() {
            validateField('lastName', 
                (value) => value.trim().length >= 2,
                'Last name must be at least 2 characters'
            );
        });

        document.getElementById('email').addEventListener('blur', function() {
            const isValid = validateField('email', 
                (value) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value),
                'Please enter a valid email address',
                'Email format is valid'
            );
            
            // Simulate email availability check
            if (isValid) {
                setTimeout(() => {
                    const successEl = document.getElementById('emailSuccess');
                    if (Math.random() > 0.3) { // 70% chance email is available
                        successEl.textContent = 'Email is available';
                        successEl.style.display = 'block';
                    } else {
                        validateField('email', () => false, 'Email is already registered');
                    }
                }, 1000);
            }
        });

        document.getElementById('username').addEventListener('blur', function() {
            const isValid = validateField('username', 
                (value) => value.trim().length >= 3 && /^[a-zA-Z0-9_]+$/.test(value),
                'Username must be at least 3 characters (letters, numbers, underscore only)',
                'Username format is valid'
            );
            
            // Simulate username availability check
            if (isValid) {
                setTimeout(() => {
                    const successEl = document.getElementById('usernameSuccess');
                    if (Math.random() > 0.4) { // 60% chance username is available
                        successEl.textContent = 'Username is available';
                        successEl.style.display = 'block';
                    } else {
                        validateField('username', () => false, 'Username is already taken');
                    }
                }, 800);
            }
        });

        document.getElementById('password').addEventListener('input', function() {
            const score = checkPasswordStrength(this.value);
            
            // Also check confirm password if it has a value
            const confirmPassword = document.getElementById('confirmPassword');
            if (confirmPassword.value) {
                validateConfirmPassword();
            }
        });

        function validateConfirmPassword() {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            
            return validateField('confirmPassword',
                (value) => value === password && value.length > 0,
                'Passwords do not match',
                'Passwords match'
            );
        }

        document.getElementById('confirmPassword').addEventListener('blur', validateConfirmPassword);

        document.getElementById('signupForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const button = document.getElementById('signupButton');
            const buttonText = document.getElementById('buttonText');
            const loading = document.getElementById('loading');
            const errorMessage = document.getElementById('errorMessage');
            const successMessage = document.getElementById('successMessage');
            
            // Hide messages
            errorMessage.style.display = 'none';
            successMessage.style.display = 'none';
            
            // Validate all fields
            const validations = [
                validateField('firstName', (v) => v.trim().length >= 2, 'First name is required'),
                validateField('lastName', (v) => v.trim().length >= 2, 'Last name is required'),
                validateField('email', (v) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v), 'Valid email is required'),
                validateField('username', (v) => v.trim().length >= 3, 'Username is required'),
                validateConfirmPassword(),
                document.getElementById('terms').checked
            ];
            
            const passwordScore = checkPasswordStrength(document.getElementById('password').value);
            
            if (!validations.every(Boolean) || passwordScore < 3) {
                errorMessage.style.display = 'block';
                return;
            }
            
            if (!document.getElementById('terms').checked) {
                alert('Please accept the terms and conditions');
                return;
            }
            
            // Show loading state
            button.disabled = true;
            loading.style.display = 'inline-block';
            buttonText.textContent = 'Creating Account...';
            
            // Simulate API call
            setTimeout(() => {
                successMessage.style.display = 'block';
                buttonText.textContent = 'Account Created!';
                
                // Reset form after success
                setTimeout(() => {
                    this.reset();
                    button.disabled = false;
                    loading.style.display = 'none';
                    buttonText.textContent = 'Create Account';
                    
                    // Redirect to login
                    window.location.href = 'login.html';
                }, 2000);
            }, 3000);
        });

        // Auto-focus first input
        document.getElementById('firstName').focus();
    </script>
</body>
</html>