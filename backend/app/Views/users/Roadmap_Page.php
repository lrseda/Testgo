<!DOCTYPE html>
<html lang="en">
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
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Road map</h1>
            <p>High-level plan and status for upcoming features.</p>
        </div>

        <!-- Filter Section -->
        <div class="filter-section">
            <div class="filter-group">
                <label for="filter">Filter:</label>
                <select id="filter" class="filter-select">
                    <option value="all">All</option>
                    <option value="in-progress">In Progress</option>
                    <option value="planned">Planned</option>
                    <option value="backlog">Backlog</option>
                    <option value="completed">Completed</option>
                </select>
            </div>
            
        </div>

        <!-- Statistics -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">10</div>
                <div class="stat-label">Total Features</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">1</div>
                <div class="stat-label">In Progress</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">2</div>
                <div class="stat-label">Planned</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">6</div>
                <div class="stat-label">Backlog</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">1</div>
                <div class="stat-label">Completed</div>
            </div>
        </div>

        <!-- Progress Bar -->
        <div class="progress-bar">
            <div class="progress-fill" style="width: 25%"></div>
        </div>

        <!-- User Management CRUD -->
        <div class="roadmap-item" data-status="in-progress">
            <div class="roadmap-header">
                <div>
                    <h3 class="roadmap-title">User Management CRUD</h3>
                    <p class="roadmap-description">Complete user registration, authentication, profile management with full CRUD operations (Create, Read, Update, Delete).</p>
                    <span class="priority-badge priority-high">Priority: High</span>
                </div>
                <span class="status-badge status-in-progress">In Progress</span>
            </div>
            <div class="roadmap-details">
                <span class="implementation-pipeline">Implementation pipeline</span>
            </div>
        </div>

        <!-- Task Management System -->
        <div class="roadmap-item" data-status="planned">
            <div class="roadmap-header">
                <div>
                    <h3 class="roadmap-title">Task & Project Management CRUD</h3>
                    <p class="roadmap-description">Allow users to create, manage, and track tasks and projects with status updates, deadlines, and collaboration features.</p>
                    <span class="priority-badge priority-high">Priority: High</span>
                </div>
                <span class="status-badge status-planned">Planned</span>
            </div>
            <div class="roadmap-details">
                <span class="implementation-pipeline">Implementation pipeline</span>
            </div>
        </div>

        <!-- Content Library System -->
        <div class="roadmap-item" data-status="planned">
            <div class="roadmap-header">
                <div>
                    <h3 class="roadmap-title">Content Library CRUD</h3>
                    <p class="roadmap-description">Document management system for storing, organizing, and sharing templates, resources, and user-generated content.</p>
                    <span class="priority-badge priority-medium">Priority: Medium</span>
                </div>
                <span class="status-badge status-planned">Planned</span>
            </div>
            <div class="roadmap-details">
                <span class="implementation-pipeline">Implementation pipeline</span>
            </div>
        </div>

        

        <!-- Email Verification -->
        <div class="roadmap-item" data-status="backlog">
            <div class="roadmap-header">
                <div>
                    <h3 class="roadmap-title">Email Verification System</h3>
                    <p class="roadmap-description">Send verification emails on signup and allow re-sending; gate sensitive actions until verified.</p>
                    <span class="priority-badge priority-medium">Priority: Medium</span>
                </div>
                <span class="status-badge status-backlog">Backlog</span>
            </div>
            <div class="roadmap-details">
                <span class="implementation-pipeline">Implementation pipeline</span>
            </div>
        </div>

        

        <!-- Notification System -->
        <div class="roadmap-item" data-status="backlog">
            <div class="roadmap-header">
                <div>
                    <h3 class="roadmap-title">Notification System</h3>
                    <p class="roadmap-description">Real-time notifications for user activities, system updates, and task reminders with email and in-app delivery.</p>
                    <span class="priority-badge priority-low">Priority: Low</span>
                </div>
                <span class="status-badge status-backlog">Backlog</span>
            </div>
            <div class="roadmap-details">
                <span class="implementation-pipeline">Implementation pipeline</span>
            </div>
        </div>

        <!-- API Integration -->
        <div class="roadmap-item" data-status="backlog">
            <div class="roadmap-header">
                <div>
                    <h3 class="roadmap-title">Third-party API Integration</h3>
                    <p class="roadmap-description">Integration with external services like Google Calendar, Slack, and productivity tools for enhanced functionality.</p>
                    <span class="priority-badge priority-low">Priority: Low</span>
                </div>
                <span class="status-badge status-backlog">Backlog</span>
            </div>
            <div class="roadmap-details">
                <span class="implementation-pipeline">Implementation pipeline</span>
            </div>
        </div>

        <!-- Analytics Dashboard -->
        <div class="roadmap-item" data-status="backlog">
            <div class="roadmap-header">
                <div>
                    <h3 class="roadmap-title">Analytics & Reporting</h3>
                    <p class="roadmap-description">User activity analytics, productivity reports, and system performance dashboards for insights and optimization.</p>
                    <span class="priority-badge priority-medium">Priority: Medium</span>
                </div>
                <span class="status-badge status-backlog">Backlog</span>
            </div>
            <div class="roadmap-details">
                <span class="implementation-pipeline">Implementation pipeline</span>
            </div>
        </div>

        <!-- Mobile App -->
        <div class="roadmap-item" data-status="backlog">
            <div class="roadmap-header">
                <div>
                    <h3 class="roadmap-title">Mobile Application</h3>
                    <p class="roadmap-description">Native mobile app for iOS and Android with offline capabilities and push notifications.</p>
                    <span class="priority-badge priority-medium">Priority: Medium</span>
                </div>
                <span class="status-badge status-backlog">Backlog</span>
            </div>
            <div class="roadmap-details">
                <span class="implementation-pipeline">Implementation pipeline</span>
            </div>
        </div>

        <!-- Security Enhancements -->
        <div class="roadmap-item" data-status="backlog">
            <div class="roadmap-header">
                <div>
                    <h3 class="roadmap-title">Advanced Security Features</h3>
                    <p class="roadmap-description">Two-factor authentication, session management, audit logs, and advanced security monitoring.</p>
                    <span class="priority-badge priority-high">Priority: High</span>
                </div>
                <span class="status-badge status-backlog">Backlog</span>
            </div>
            <div class="roadmap-details">
                <span class="implementation-pipeline">Implementation pipeline</span>
            </div>
        </div>

        <!-- Section Divider -->
        <div class="section-divider">
            <span class="section-label">Completed</span>
        </div>

        <!-- Landing Page -->
        <div class="roadmap-item" data-status="completed">
            <div class="roadmap-header">
                <div>
                    <h3 class="roadmap-title">Landing Page & UI Foundation</h3>
                    <p class="roadmap-description">Responsive landing page with modern design, component fragments, and CodeIgniter MVC structure implementation.</p>
                    <span class="priority-badge priority-high">Priority: High</span>
                </div>
                <span class="status-badge status-done">Done</span>
            </div>
            <div class="roadmap-details">
                <span class="implementation-pipeline">Implementation pipeline</span>
            </div>
        </div>
    </div>

    <script>
        // Filter functionality
        document.getElementById('filter').addEventListener('change', function() {
            const filterValue = this.value;
            const roadmapItems = document.querySelectorAll('.roadmap-item');
            
            roadmapItems.forEach(item => {
                if (filterValue === 'all') {
                    item.style.display = 'block';
                } else {
                    const itemStatus = item.dataset.status;
                    if (itemStatus === filterValue) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                }
            });
            
            // Update statistics based on filter
            updateStatistics(filterValue);
        });

        function updateStatistics(filter) {
            const items = document.querySelectorAll('.roadmap-item');
            let visible = 0;
            
            items.forEach(item => {
                if (filter === 'all' || item.dataset.status === filter) {
                    visible++;
                }
            });
            
            // You can add more sophisticated statistics updating here
        }

        // Add smooth animations
        document.querySelectorAll('.roadmap-item').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</html>