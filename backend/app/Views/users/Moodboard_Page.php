<!DOCTYPE html>
<html lang="en">
    <?= view('components/mb-head') ?>
<body>
    <?= view('components/mb-header') ?>

        <?= view('components/color-palette-section') ?>

        <?= view('components/typography-section') ?>

        <?= view('components/mb-buttons') ?>

        <?= view('components/mb-cards') ?>

        <?= view('components/mb-logo') ?>

        
    </div>

    <script>
        // Interactive color theme preview
        document.querySelectorAll('.color-option').forEach(option => {
            option.addEventListener('click', function() {
                // Remove active class from all options
                document.querySelectorAll('.color-option').forEach(opt => opt.classList.remove('active'));
                
                // Add active class to clicked option
                this.classList.add('active');
                
                const color = this.dataset.color;
                const previewArea = document.getElementById('previewArea');
                const previewButton = document.getElementById('previewButton');
                const previewTitle = document.getElementById('previewTitle');
                
                // Update preview based on selected color
                switch(color) {
                    case 'primary':
                        previewArea.style.background = 'linear-gradient(135deg, #6366f1, #4f46e5)';
                        previewButton.style.background = '#6366f1';
                        previewTitle.style.color = '#ffffff';
                        break;
                    case 'secondary':
                        previewArea.style.background = 'linear-gradient(135deg, #ec4899, #db2777)';
                        previewButton.style.background = '#ec4899';
                        previewTitle.style.color = '#ffffff';
                        break;
                    case 'accent':
                        previewArea.style.background = 'linear-gradient(135deg, #10b981, #059669)';
                        previewButton.style.background = '#10b981';
                        previewTitle.style.color = '#ffffff';
                        break;
                    case 'dark':
                        previewArea.style.background = 'linear-gradient(135deg, #1f2937, #111827)';
                        previewButton.style.background = '#1f2937';
                        previewTitle.style.color = '#ffffff';
                        break;
                }
            });
        });

        // Add hover effects to cards
        document.querySelectorAll('.sample-card, .color-card, .font-showcase, .button-showcase, .logo-container').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Smooth scroll animation observer
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.section').forEach(section => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(30px)';
            section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(section);
        });
    </script>
</body>
</html>