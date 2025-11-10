<!-- Signup Form -->
            <form id="signupForm" action="/register" method="post" novalidate>
                <div class="form-row">
                    <label for="firstName">First Name</label>
                    <input type="text" 
                        id="firstName" 
                        name="firstName" 
                        class="form-input <?= isset($errors['firstName']) ? 'error' : '' ?>" 
                        placeholder="Enter your first name" 
                        value="<?= esc($old['firstName'] ?? '') ?>" 
                        required>
                    <?php if (!empty($errors['firstName'])): ?>
                        <p class="error-message"><?= esc($errors['firstName']) ?></p>
                    <?php endif; ?>
                    
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" 
                            id="lastName" 
                            name="lastName" 
                            class="form-input <?= isset($errors['lastName']) ? 'error' : '' ?>" 
                            placeholder="Enter your last name" 
                            value="<?= esc($old['lastName'] ?? '') ?>" 
                            required>
                        <?php if (!empty($errors['lastName'])): ?>
                            <p class="error-message"><?= esc($errors['lastName']) ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" 
                        id="email" 
                        name="email" 
                        class="form-input <?= isset($errors['email']) ? 'error' : '' ?>" 
                        placeholder="Enter your email address" 
                        value="<?= esc($old['email'] ?? '') ?>" 
                        required>
                    <div class="field-validation" id="emailError">Please enter a valid email address</div>
                    <div class="field-validation success" id="emailSuccess">Email is available</div>
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" 
                        id="username" 
                        name="username" 
                        class="form-input <?= isset($errors['username']) ? 'error' : '' ?>" 
                        placeholder="Choose a username" 
                        value="<?= esc($old['username'] ?? '') ?>" 
                        required>
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