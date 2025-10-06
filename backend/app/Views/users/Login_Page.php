<!DOCTYPE html>
<html lang="en">
    <?= view('components/lg-head') ?>
<body>
    <?= view('components/lg-container') ?>
    

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.querySelector('.password-toggle');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.textContent = '🙈';
            } else {
                passwordInput.type = 'password';
                toggleIcon.textContent = '👁️';
            }
        }

        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const button = document.getElementById('loginButton');
            const buttonText = document.getElementById('buttonText');
            const loading = document.getElementById('loading');
            const errorMessage = document.getElementById('errorMessage');
            const successMessage = document.getElementById('successMessage');
            
            // Hide messages
            errorMessage.style.display = 'none';
            successMessage.style.display = 'none';
            
            // Show loading state
            button.disabled = true;
            loading.style.display = 'inline-block';
            buttonText.textContent = 'Signing In...';
            
            // Simulate API call
            setTimeout(() => {
                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;
                
                // Simple validation for demo
                if (email === 'admin@claude.ai' && password === 'password123') {
                    successMessage.style.display = 'block';
                    buttonText.textContent = 'Success!';
                    
                    setTimeout(() => {
                        window.location.href = 'index.html';
                    }, 1500);
                } else {
                    errorMessage.style.display = 'block';
                    button.disabled = false;
                    loading.style.display = 'none';
                    buttonText.textContent = 'Sign In';
                }
            }, 2000);
        });

        // Real-time validation
        document.getElementById('email').addEventListener('blur', function() {
            const email = this.value;
            if (email && !email.includes('@')) {
                this.classList.add('error');
            } else {
                this.classList.remove('error');
            }
        });

        document.getElementById('password').addEventListener('input', function() {
            if (this.value.length > 0 && this.value.length < 6) {
                this.classList.add('error');
            } else {
                this.classList.remove('error');
            }
        });

        // Auto-focus first input
        document.getElementById('email').focus();
    </script>
</body>
</html>