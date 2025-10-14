<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mood Board</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700;800&display=swap');

        :root {
            /* Color Palette */
            --primary-color: #6366f1;
            --secondary-color: #ec4899;
            --accent-color: #10b981;
            --dark-color: #1f2937;
            --light-color: #f9fafb;
            --gray-color: #6b7280;
            --white: #ffffff;
            --border-color: #e5e7eb;
            
            /* Typography */
            --primary-font: 'Inter', sans-serif;
            --heading-font: 'Poppins', sans-serif;
        }

        body {
            font-family: var(--primary-font);
            line-height: 1.6;
            color: var(--dark-color);
            background: var(--light-color);
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem;
        }

        .page-header {
            text-align: center;
            margin-bottom: 3rem;
            background: var(--white);
            padding: 3rem 2rem;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            position: relative;
        }

        .page-header h1 {
            font-family: var(--heading-font);
            font-size: 3rem;
            color: var(--dark-color);
            margin-bottom: 1rem;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .page-header p {
            font-size: 1.2rem;
            color: var(--gray-color);
            max-width: 600px;
            margin: 0 auto;
        }

        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            text-decoration: none;
            background: var(--primary-color);
            color: var(--white);
            padding: 8px 14px;
            border-radius: 8px;
            font-weight: 500;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .back-button:hover {
            background: var(--secondary-color);
            transform: translateX(-2px);
        }

        .section {
            margin-bottom: 4rem;
            background: var(--white);
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
        }

        .section-title {
            font-family: var(--heading-font);
            font-size: 2rem;
            color: var(--dark-color);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .section-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 1.2rem;
        }

        /* Color Palette Section */
        .color-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .color-card {
            text-align: center;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .color-card:hover {
            transform: translateY(-5px);
        }

        .color-swatch {
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 600;
            font-size: 1.1rem;
        }

        .primary-color { background: var(--primary-color); }
        .secondary-color { background: var(--secondary-color); }
        .accent-color { background: var(--accent-color); }

        .color-info {
            padding: 1rem;
            background: var(--white);
        }

        .color-name {
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 0.5rem;
        }

        .color-hex {
            color: var(--gray-color);
            font-family: 'Courier New', monospace;
            font-size: 0.9rem;
        }

        /* Typography Section */
        .typography-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 3rem;
        }

        .font-showcase {
            padding: 2rem;
            border: 2px solid var(--border-color);
            border-radius: 12px;
            background: linear-gradient(135deg, #fafafa 0%, #ffffff 100%);
        }

        .font-name {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .font-inter {
            font-family: var(--primary-font);
        }

        .font-poppins {
            font-family: var(--heading-font);
        }

        .font-samples {
            margin-top: 1.5rem;
        }

        .font-sample {
            margin-bottom: 1rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--border-color);
        }

        .font-sample:last-child {
            border-bottom: none;
        }

        .sample-label {
            font-size: 0.9rem;
            color: var(--gray-color);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 0.5rem;
        }

        /* Button Set Section */
        .button-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .button-showcase {
            text-align: center;
            padding: 2rem;
            border: 2px solid var(--border-color);
            border-radius: 12px;
            background: linear-gradient(135deg, #fafafa 0%, #ffffff 100%);
        }

        .btn {
            padding: 0.75rem 2rem;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            cursor: pointer;
            font-size: 0.95rem;
            margin-bottom: 1rem;
            width: 100%;
            font-family: var(--primary-font);
        }

        .btn-primary {
            background: var(--primary-color);
            color: var(--white);
        }

        .btn-primary:hover {
            background: #4f46e5;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.3);
        }

        .btn-secondary {
            background: var(--secondary-color);
            color: var(--white);
        }

        .btn-secondary:hover {
            background: #db2777;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(236, 72, 153, 0.3);
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

        .button-label {
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }

        /* Card Set Section */
        .card-showcase {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .sample-card {
            background: var(--white);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 6px 25px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .sample-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 40px rgba(0,0,0,0.15);
        }

        .card-image {
            height: 160px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 2rem;
        }

        .card-content {
            padding: 1.5rem;
        }

        .card-title {
            font-family: var(--heading-font);
            font-size: 1.3rem;
            color: var(--dark-color);
            margin-bottom: 0.5rem;
        }

        .card-description {
            color: var(--gray-color);
            line-height: 1.5;
            margin-bottom: 1rem;
        }

        .card-action {
            padding: 0.5rem 1rem;
            background: var(--accent-color);
            color: var(--white);
            border: none;
            border-radius: 6px;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .card-action:hover {
            background: #059669;
        }

        /* Logo Section */
        .logo-showcase {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 3rem;
        }

        .logo-container {
            text-align: center;
            padding: 2rem;
            border: 2px solid var(--border-color);
            border-radius: 12px;
            background: linear-gradient(135deg, #fafafa 0%, #ffffff 100%);
        }

        .logo-circle {
            width: 80px;
            height: 80px;
            background: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: bold;
            font-size: 1.5rem;
            margin: 0 auto 1rem;
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.3);
        }

        .logo-square {
            width: 80px;
            height: 80px;
            background: var(--secondary-color);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: bold;
            font-size: 1.5rem;
            margin: 0 auto 1rem;
            box-shadow: 0 4px 15px rgba(236, 72, 153, 0.3);
        }

        .logo-label {
            font-weight: 600;
            color: var(--dark-color);
            font-size: 1.1rem;
        }

        /* Interactive Elements */
        .interactive-demo {
            background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
            padding: 2rem;
            border-radius: 12px;
            margin-top: 2rem;
        }

        .demo-title {
            font-family: var(--heading-font);
            font-size: 1.5rem;
            color: var(--dark-color);
            margin-bottom: 1rem;
            text-align: center;
        }

        .color-picker {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }

        .color-option {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            border: 3px solid transparent;
            transition: all 0.3s ease;
        }

        .color-option:hover {
            transform: scale(1.1);
            border-color: var(--white);
        }

        .color-option.active {
            border-color: var(--dark-color);
            transform: scale(1.15);
        }

        .preview-area {
            background: var(--white);
            padding: 2rem;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            .page-header h1 {
                font-size: 2rem;
            }

            .typography-grid,
            .button-grid,
            .card-showcase,
            .logo-showcase {
                grid-template-columns: 1fr;
            }

            .color-grid {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            }
        }

        /* Animation */
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

        .section {
            animation: fadeInUp 0.6s ease forwards;
        }

        .section:nth-child(1) { animation-delay: 0.1s; }
        .section:nth-child(2) { animation-delay: 0.2s; }
        .section:nth-child(3) { animation-delay: 0.3s; }
        .section:nth-child(4) { animation-delay: 0.4s; }
    </style>
</head>