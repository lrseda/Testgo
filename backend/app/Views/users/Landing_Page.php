<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claude - AI Assistant Landing Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Typography */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Poppins:wght@400;500;600;700&display=swap');

        :root {
            /* Color Palette */
            --primary-color: #6366f1;
            --secondary-color: #ec4899;
            --accent-color: #10b981;
            --dark-color: #1f2937;
            --light-color: #f9fafb;
            --gray-color: #6b7280;
            --white: #ffffff;
            
            /* Typography */
            --primary-font: 'Inter', sans-serif;
            --heading-font: 'Poppins', sans-serif;
        }

        body {
            font-family: var(--primary-font);
            line-height: 1.6;
            color: var(--dark-color);
        }

        /* Header */
        .header {
            background: var(--white);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
        }

        .logo {
            font-family: var(--heading-font);
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--dark-color);
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: var(--primary-color);
        }

        /* Button Styles */
        .btn {
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            cursor: pointer;
            font-size: 0.95rem;
        }

        .btn-primary {
            background: var(--primary-color);
            color: var(--white);
        }

        .btn-primary:hover {
            background: #4f46e5;
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: var(--secondary-color);
            color: var(--white);
        }

        .btn-secondary:hover {
            background: #db2777;
            transform: translateY(-2px);
        }

        .btn-border {
            background: transparent;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
        }

        .btn-border:hover {
            background: var(--primary-color);
            color: var(--white);
        }

        .btn-disabled {
            background: var(--gray-color);
            color: var(--white);
            cursor: not-allowed;
            opacity: 0.6;
        }

        /* Main Content */
        main {
            margin-top: 80px;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: var(--white);
            padding: 4rem 2rem;
            text-align: center;
        }

        .hero-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .hero h1 {
            font-family: var(--heading-font);
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            animation: fadeInUp 1s ease;
        }

        .hero p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            animation: fadeInUp 1s ease 0.2s both;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
            animation: fadeInUp 1s ease 0.4s both;
        }

        /* Cards Section */
        .cards-section {
            padding: 4rem 2rem;
            background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkRapDtN6JSis1bWCnMbqn3pmIEDeDY9t8tg&s');
            /* z-index: 0; */
        }
        /* .cards-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* dim level */
            z-index: -1; 
        } */

        .cards-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            font-family: var(--heading-font);
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 3rem;
            color: var(--light-color);
            text-shadow:
                2px 2px 0 #000,
                -2px 2px 0 #000,
                2px -2px 0 #000,
                -2px -1px 0 #000;
        }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .card {
            background: var(--white);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0,0,0,0.15);
        }

        .card-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            color: var(--white);
            font-size: 1.5rem;
        }

        .card h3 {
            font-family: var(--heading-font);
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--dark-color);
        }

        .card p {
            color: var(--gray-color);
            line-height: 1.6;
        }

        /* CTA Section */
        .cta-section {
            padding: 4rem 2rem;
            background: var(--dark-color);
            color: var(--white);
            text-align: center;
        }

        .cta-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .cta-section h2 {
            font-family: var(--heading-font);
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .cta-section p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        /* Footer */
        .footer {
            background: var(--dark-color);
            color: var(--white);
            padding: 3rem 2rem 1rem;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            font-family: var(--heading-font);
            margin-bottom: 1rem;
            color: var(--primary-color);
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 0.5rem;
        }

        .footer-section ul li a {
            color: var(--gray-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-section ul li a:hover {
            color: var(--white);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid #374151;
            color: var(--gray-color);
        }

        /* Logos */
        .logo-circle {
            width: 50px;
            height: 50px;
            background: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: bold;
        }

        .logo-square {
            width: 50px;
            height: 50px;
            background: var(--secondary-color);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: bold;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .cards-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header Fragment -->
    <header class="header">
        <nav class="nav-container">
            <div class="logo">CoffeeShop</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="signup.html">Sign Up</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero" id="home">
            <div class="hero-container">
                <h1>Welcome to CoffeeShop Website</h1>
                <p>Fresh coffee beans</p>
                <div class="hero-buttons">
                    <a href="#features" class="btn btn-primary">Get Started</a>
                    <a href="#about" class="btn btn-border">Mood Board</a>
                    <a href="roadmap.html" class="btn btn-secondary">View Roadmap</a>
                    <button class="btn btn-disabled" disabled>Coming Soon</button>
                </div>
            </div>
        </section>

        <!-- Cards Section -->
        <section class="cards-section" id="features">
            <div class="cards-container">
                <h2 class="section-title">Key Features</h2>
                <div class="cards-grid">
                    <!-- Card 1 -->
                    <div class="card">
                        <div class="card-icon">☕</div>
                        <h3>Aroma</h3>
                        <p>Experience blazing-fast coffees.</p>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class="card">
                        <div class="card-icon">🤵🏻</div>
                        <h3>Good Staff</h3>
                        <p>Friendly staff where they will greet you.</p>
                    </div>
                    
                    <!-- Card 3 -->
                    <div class="card">
                        <div class="card-icon">🔒</div>
                        <h3>Secure & Private</h3>
                        <p>Your data is protected with enterprise-grade security measures and privacy-first design principles.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="cta-container">
                <h2>Ready to browse the website?</h2>
                <p>Join thousands of users who have already revolutionized their productivity with the website</p>
                <a href="signup.html" class="btn btn-primary">Start Your Journey</a>
            </div>
        </section>
    </main>

    <!-- Footer Fragment -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-content">
                
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 All rights reserved.</p>
            </div>
        </div>
    </footer>

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