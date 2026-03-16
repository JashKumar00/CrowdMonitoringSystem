# Crowd Monitoring System

A web-based **Smart CCTV Monitoring System** built with PHP and MySQL for real-time crowd management, crime prevention, and workplace monitoring.

## Features

- **Crowd Management** — Real-time density monitoring, heat mapping, flow pattern analysis, and capacity alerts
- **Crime Prevention** — AI-powered behavior recognition, object detection & tracking, instant security alerts
- **Work Monitoring** — Safety protocol compliance, productivity analytics, equipment usage tracking
- **User Authentication** — Role-based access control (Admin & User roles) with secure login/registration
- **Contact System** — Integrated contact form with validation
- **Alerts Dashboard** — Real-time alerts for crowd, crime, and work violations

## Tech Stack

- **Backend:** PHP
- **Database:** MySQL
- **Frontend:** HTML, Tailwind CSS, Font Awesome, Glassmorphism UI
- **Animations:** Animate.css, Particles.js

## Project Structure

```
crowd-monitoring-system/
├── index.php              # Home / Landing page
├── about.php              # About page
├── contact.php            # Contact form
├── login.php              # User login
├── register.php           # User registration
├── logout.php             # Logout handler
├── reset_password.php     # Password reset
├── database.sql           # MySQL database schema & seed data
├── includes/              # Shared PHP includes
│   ├── header.php
│   ├── footer.php
│   ├── config.php         # Database configuration
│   ├── functions.php      # Utility functions
│   └── auth.php           # Authentication functions
├── admin/                 # Admin dashboard
│   └── dashboard.php
├── user/                  # User dashboard
│   └── dashboard.php
└── assets/                # Static assets
    └── images/            # Images used across the site
```

## Database Setup

1. Create the database by importing the SQL file:

```bash
mysql -u root -p < database.sql
```

2. This creates the `cctv_monitoring_system` database with:
   - `users` table — user accounts with role-based access
   - `cameras` table — registered CCTV cameras
   - `alerts` table — security alerts from cameras
   - `logs` table — system activity logs

## Default Admin Account

| Field    | Value                  |
|----------|------------------------|
| Username | `admin`                |
| Password | `admin123`             |
| Email    | `admin@cctvsystem.com` |

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/JashKumar00/CrowdMonitoringSystem.git
   ```

2. Move to your web server directory (e.g., `htdocs` for XAMPP):
   ```bash
   cp -r CrowdMonitoringSystem/ /xampp/htdocs/
   ```

3. Import the database:
   ```bash
   mysql -u root -p < database.sql
   ```

4. Update `includes/config.php` with your database credentials.

5. Open `http://localhost/CrowdMonitoringSystem/` in your browser.

## Team

Developed by **BugBusters** — Lovely Professional University, Phagwara, Punjab, India
