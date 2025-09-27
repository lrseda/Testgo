<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Claude AI</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap');

        :root {
            --primary-color: #6366f1;
            --secondary-color: #ec4899;
            --accent-color: #10b981;
            --dark-color: #1f2937;
            --light-color: #f9fafb;
            --gray-color: #6b7280;
            --white: #ffffff;
            --border-color: #e5e7eb;
            --error-color: #ef4444;
            --warning-color: #f59e0b;
            --primary-font: 'Inter', sans-serif;
            --heading-font: 'Poppins', sans-serif;
        }

        body {
            font-family: var(--primary-font);
            background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        .signup-container {
            background: var(--white);
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.15);
            overflow: hidden;
            width: 100%;
            max-width: 1000px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            min-height: 650px;
        }

        .signup-visual {
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 3rem;
            color: var(--white);
            text-align: center;
            position: relative;
            order: 2;
        }

        .signup-visual::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="dots" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="1" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23dots)"/></svg>');
            opacity: 0.4;
        }

        .visual-icon {
            width: 100px;
            height: 100px;
            background: rgba(255,255,255,0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            margin-bottom: 2rem;
            backdrop-filter: blur(10px);
            position: relative;
            z-index: 1;
        }

        .visual-content {
            position: relative;
            z-index: 1;
        }

        .visual-content h2 {
            font-family: var(--heading-font);
            font-size: 2.5rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .visual-content p {
            font-size: 1.1rem;
            opacity: 0.9;
            line-height: 1.6;
            max-width: 300px;
        }

        .signup-form {
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            order: 1;
        }

        .form-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .form-header h1 {
            font-family: var(--heading-font);
            font-size: 2rem;
            color: var(--dark-color);
            margin-bottom: 0.5rem;
        }

        .form-header p {
            color: var(--gray-color);
            font-size: 0.95rem;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--dark-color);
            font-size: 0.9rem;
        }

        .form-input {
            width: 100%;
            padding: 0.875rem 1rem;
            border: 2px solid var(--border-color);
            border-radius: 8px;
            font-family: var(--primary-font);
            font-size: 0.95rem;
            transition: all 0.3s ease;
            background: var(--white);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }

        .form-input.error {
            border-color: var(--error-color);
        }

        .form-input.success {
            border-color: var(--accent-color);
        }

        .password-input-wrapper {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: var(--gray-color);
            transition: color 0.3s ease;
            user-select: none;
        }

        .password-toggle:hover {
            color: var(--primary-color);
        }

        .password-strength {
            margin-top: 0.5rem;
            font-size: 0.8rem;
        }

        .strength-meter {
            height: 4px;
            background: var(--border-color);
            border-radius: 2px;
            overflow: hidden;
            margin-bottom: 0.5rem;
        }

        .strength-fill {
            height: 100%;
            width: 0;
            transition: all 0.3s ease;
            border-radius: 2px;
        }

        .strength-weak { background: var(--error-color); width: 25%; }
        .strength-fair { background: var(--warning-color); width: 50%; }
        .strength-good { background: var(--primary-color); width: 75%; }
        .strength-strong { background: var(--accent-color); width: 100%; }

        .field-validation {
            font-size: 0.8rem;
            margin-top: 0.5rem;
            display: none;
        }

        .field-validation.error {
            color: var(--error-color);
            display: block;
        }

        .field-validation.success {
            color: var(--accent-color);
            display: block;
        }

        .terms-wrapper {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            margin-bottom: 2rem;
            font-size: 0.9rem;
            line-height: 1.5;
        }

        .terms-wrapper input[type="checkbox"] {
            accent-color: var(--primary-color);
            margin-top: 0.25rem;
        }

        .terms-wrapper a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }

        .terms-wrapper a:hover {
            color: var(--secondary-color);
        }

        .signup-button {
            width: 100%;
            padding: 0.875rem;
            background: var(--primary-color);
            color: var(--white);
            border: none;
            border-radius: 8px;
            font-family: var(--primary-font);
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 1.5rem;
            position: relative;
        }

        .signup-button:hover:not(:disabled) {
            background: #4f46e5;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.3);
        }

        .signup-button:disabled {
            background: var(--gray-color);
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        .loading {
            display: none;
            width: 20px;
            height: 20px;
            border: 2px solid var(--white);
            border-radius: 50%;
            border-top-color: transparent;
            animation: spin 1s ease-in-out infinite;
            margin-right: 0.5rem;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 1.5rem 0;
            color: var(--gray-color);
            font-size: 0.9rem;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: var(--border-color);
        }

        .divider span {
            padding: 0 1rem;
        }

        .social-buttons {
            display: flex;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .social-button {
            flex: 1;
            padding: 0.75rem;
            border: 2px solid var(--border-color);
            border-radius: 8px;
            background: var(--white);
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            font-weight: 500;
            color: var(--dark-color);
            text-decoration: none;
        }

        .social-button:hover {
            border-color: var(--primary-color);
            background: var(--light-color);
            transform: translateY(-1px);
        }

        .form-footer {
            text-align: center;
            color: var(--gray-color);
            font-size: 0.9rem;
        }

        .form-footer a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }

        .form-footer a:hover {
            color: var(--secondary-color);
        }

        .error-message {
            background: #fef2f2;
            color: var(--error-color);
            padding: 0.75rem 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            border-left: 4px solid var(--error-color);
            display: none;
            font-size: 0.9rem;
        }

        .success-message {
            background: #f0fdf4;
            color: var(--accent-color);
            padding: 0.75rem 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            border-left: 4px solid var(--accent-color);
            display: none;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .signup-container {
                grid-template-columns: 1fr;
                max-width: 400px;
            }

            .signup-visual {
                display: none;
            }

            .signup-form {
                padding: 2rem 1.5rem;
                order: 1;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .social-buttons {
                flex-direction: column;
            }
        }

        /* Animation */
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .signup-form {
            animation: slideInLeft 0.6s ease;
        }
    </style>
</head>
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

            <!-- Signup Form -->
            <form id="signupForm">
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" name="firstName" class="form-input" placeholder="Enter your first name" required>
                        <div class="field-validation" id="firstNameError">First name is required</div>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" id="lastName" name="lastName" class="form-input" placeholder="Enter your last name" required>
                        <div class="field-validation" id="lastNameError">Last name is required</div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="form-input" placeholder="Enter your email address" required>
                    <div class="field-validation" id="emailError">Please enter a valid email address</div>
                    <div class="field-validation success" id="emailSuccess">Email is available</div>
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-input" placeholder="Choose a username" required>
                    <div class="field-validation" id="usernameError">Username must be at least 3 characters</div>
                    <div class="field-validation success" id="usernameSuccess">Username is available</div>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="password-input-wrapper">
                        <input type="password" id="password" name="password" class="form-input" placeholder="Create a strong password" required>
                        <span class="password-toggle" onclick="togglePassword('password')">👁️</span>
                    </div>
                    <div class="password-strength">
                        <div class="strength-meter">
                            <div class="strength-fill" id="strengthFill"></div>
                        </div>
                        <span id="strengthText">Password strength: Weak</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <div class="password-input-wrapper">
                        <input type="password" id="confirmPassword" name="confirmPassword" class="form-input" placeholder="Confirm your password" required>
                        <span class="password-toggle" onclick="togglePassword('confirmPassword')">👁️</span>
                    </div>
                    <div class="field-validation" id="confirmPasswordError">Passwords do not match</div>
                    <div class="field-validation success" id="confirmPasswordSuccess">Passwords match</div>
                </div>

                <div class="terms-wrapper">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">
                        I agree to the <a href="#" target="_blank">Terms of Service</a> and 
                        <a href="#" target="_blank">Privacy Policy</a>. I also consent to receive 
                        product updates and marketing communications from Claude AI.
                    </label>
                </div>

                <button type="submit" class="signup-button" id="signupButton">
                    <span class="loading" id="loading"></span>
                    <span id="buttonText">Create Account</span>
                </button>
            </form>

            <!-- Social Signup -->
            <div class="divider">
                <span>Or sign up with</span>
            </div>

            <div class="social-buttons">
                <a href="#" class="social-button">
                    <span>📧</span>
                    Google
                </a>
                <a href="#" class="social-button">
                    <span>👤</span>
                    GitHub
                </a>
            </div>

            <!-- Footer -->
            <div class="form-footer">
                Already have an account? <a href="login.html">Sign in here</a>
            </div>
        </div>

        <!-- Visual Side -->
        <div class="signup-visual">
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