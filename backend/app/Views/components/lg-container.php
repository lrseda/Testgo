<div class="login-container">
        <!-- Visual Side -->
        <div class="login-visual">
            <div class="visual-icon">☕</div>
            <div class="visual-content">
                <h2>Welcome Back!</h2>
                <p>Sign in to access the website.</p>
            </div>
        </div>

        <!-- Form Side -->
        <div class="login-form">
            <div class="form-header">
                <h1>Sign In</h1>
                <p>Enter your credentials to access your account</p>
            </div>

            <!-- Messages -->
            <div class="error-message" id="errorMessage">
                Invalid email or password. Please try again.
            </div>
            <div class="success-message" id="successMessage">
                Login successful! Redirecting...
            </div>

            <!-- Login Form -->
            <form id="loginForm">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="form-input" placeholder="Enter your email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="password-input-wrapper">
                        <input type="password" id="password" name="password" class="form-input" placeholder="Enter your password" required>
                        <span class="password-toggle" onclick="togglePassword()">👁️</span>
                    </div>
                </div>

                <div class="form-options">
                    <div class="checkbox-wrapper">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Remember me</label>
                    </div>
                    <a href="#" class="forgot-password">Forgot Password?</a>
                </div>

                <button type="submit" class="login-button" id="loginButton">
                    <span class="loading" id="loading"></span>
                    <span id="buttonText">Sign In</span>
                </button>
            </form>

            <!-- Social Login -->
            <div class="divider">
                <span>Or continue with</span>
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
                Don't have an account? <a href="signup.html">Sign up here</a>
            </div>
        </div>
    </div>