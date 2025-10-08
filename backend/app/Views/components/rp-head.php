<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roadmap - Claude AI</title>
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
            --success-color: #10b981;
            --warning-color: #f59e0b;
            --info-color: #3b82f6;
            --backlog-color: #8b5cf6;
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
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .header {
            background: var(--white);
            padding: 2rem 0;
            margin-bottom: 2rem;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .header h1 {
            font-family: var(--heading-font);
            font-size: 2.5rem;
            color: var(--dark-color);
            margin-bottom: 0.5rem;
        }

        .header p {
            color: var(--gray-color);
            font-size: 1.1rem;
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

        .filter-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            background: var(--white);
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .filter-group {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .filter-group label {
            font-weight: 500;
            color: var(--dark-color);
        }

        .filter-select {
            padding: 0.5rem 1rem;
            border: 2px solid var(--border-color);
            border-radius: 8px;
            font-family: var(--primary-font);
            background: var(--white);
        }

        .roadmap-note {
            color: var(--gray-color);
            font-style: italic;
        }

        .roadmap-item {
            background: var(--white);
            margin-bottom: 1.5rem;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            overflow: hidden;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .roadmap-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

        .roadmap-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 1.5rem;
            border-bottom: 1px solid var(--border-color);
        }

        .roadmap-title {
            font-family: var(--heading-font);
            font-size: 1.3rem;
            color: var(--dark-color);
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .roadmap-description {
            color: var(--gray-color);
            line-height: 1.5;
            margin-bottom: 1rem;
        }

        .priority-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
            text-transform: capitalize;
        }

        .priority-high {
            background: #fef2f2;
            color: #dc2626;
        }

        .priority-medium {
            background: #fefbf2;
            color: #d97706;
        }

        .priority-low {
            background: #f0f9ff;
            color: #0284c7;
        }

        .status-badge {
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-weight: 500;
            font-size: 0.9rem;
            text-align: center;
            min-width: 100px;
        }

        .status-in-progress {
            background: var(--success-color);
            color: var(--white);
        }

        .status-planned {
            background: var(--info-color);
            color: var(--white);
        }

        .status-backlog {
            background: var(--backlog-color);
            color: var(--white);
        }

        .status-done {
            background: var(--accent-color);
            color: var(--white);
        }

        .roadmap-details {
            padding: 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .implementation-pipeline {
            color: var(--gray-color);
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .implementation-pipeline::before {
            content: "▶";
            color: var(--primary-color);
        }

        .section-divider {
            margin: 3rem 0 2rem 0;
            border-bottom: 2px solid var(--border-color);
            position: relative;
        }

        .section-label {
            background: var(--light-color);
            color: var(--dark-color);
            padding: 0.5rem 1rem;
            font-weight: 600;
            font-family: var(--heading-font);
            position: absolute;
            bottom: -1rem;
            left: 0;
            border-radius: 8px;
            border: 2px solid var(--border-color);
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: var(--border-color);
            border-radius: 4px;
            margin: 1rem 0;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            transition: width 0.3s ease;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: var(--white);
            padding: 1.5rem;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: var(--gray-color);
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            .filter-section {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }

            .roadmap-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }

            .roadmap-details {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
        }
    </style>
</head>