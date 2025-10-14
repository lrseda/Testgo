<!DOCTYPE html>
<html lang="en">
    <?= view('components/head') ?>


<body>
    <?= view('components/header') ?>

    <main>
        <!-- Hero Section -->
        <section class="hero" id="home">
            <div class="hero-container">
                <h1>Welcome to CoffeeShop Website</h1>
                <p>Fresh coffee beans</p>
                <?= view('components/buttons') ?>
            </div>
        </section>

        <?= view('components/cards') ?>

        <?= view('components/cta-section') ?>
    </main>

    <?= view('components/footer') ?>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add scroll effect to header
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(255, 255, 255, 0.95)';
                header.style.backdropFilter = 'blur(10px)';
            } else {
                header.style.background = 'var(--white)';
                header.style.backdropFilter = 'none';
            }
        });
    </script>
</body>
</html>