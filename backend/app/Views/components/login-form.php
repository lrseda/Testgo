<div class="form-group">
    <label for="email">Email Address</label>
    <input
        type="email"
        id="email"
        name="email"
        class="form-input <?= isset($errors['email']) ? 'error' : '' ?>"
        placeholder="Enter your email"
        value="<?= esc($old['email'] ?? '') ?>"
        required
    >
    <?php if (!empty($errors['email'])): ?>
        <p class="error-message"><?= esc($errors['email']) ?></p>
    <?php endif; ?>
</div>

<div class="form-group">
    <label for="password">Password</label>
    <div class="password-input-wrapper">
        <input
            type="password"
            id="password"
            name="password"
            class="form-input <?= isset($errors['password']) ? 'error' : '' ?>"
            placeholder="Enter your password"
            required
        >
        <span class="password-toggle" onclick="togglePassword()">👁️</span>
    </div>
    <?php if (!empty($errors['password'])): ?>
        <p class="error-message"><?= esc($errors['password']) ?></p>
    <?php endif; ?>
</div>

<div class="form-options">
    <div class="checkbox-wrapper">
        <input type="checkbox" id="remember" name="remember">
        <label for="remember">Remember me</label>
    </div>
    <a href="#" class="forgot-password">Forgot Password?</a>
</div>
