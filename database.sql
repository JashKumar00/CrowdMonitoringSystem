-- Database for CCTV Monitoring System

-- Create database
CREATE DATABASE IF NOT EXISTS cctv_monitoring_system;
USE cctv_monitoring_system;

-- Users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'user') DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Cameras table
CREATE TABLE IF NOT EXISTS cameras (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    location VARCHAR(255) NOT NULL,
    status ENUM('active', 'inactive', 'maintenance') DEFAULT 'active',
    ip_address VARCHAR(50),
    added_by INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (added_by) REFERENCES users(id) ON DELETE SET NULL
);

-- Alerts table
CREATE TABLE IF NOT EXISTS alerts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    camera_id INT,
    alert_type ENUM('crowd', 'crime', 'work_violation', 'other') NOT NULL,
    description TEXT NOT NULL,
    status ENUM('new', 'in_progress', 'resolved') DEFAULT 'new',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (camera_id) REFERENCES cameras(id) ON DELETE CASCADE
);

-- Logs table
CREATE TABLE IF NOT EXISTS logs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    action VARCHAR(100) NOT NULL,
    details TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
);

-- Insert default admin user (password: admin123)
INSERT INTO users (username, email, password, role) VALUES 
('admin', 'admin@cctvsystem.com', '$2y$10$8KzO3LOgVAWmJCNzPxCmkOgSn1YN9AUWuJj7R89Y.4vQGqELtBE0W', 'admin');

-- Insert sample cameras
INSERT INTO cameras (name, location, status, ip_address, added_by) VALUES 
('Camera 1', 'Main Entrance', 'active', '192.168.1.101', 1),
('Camera 2', 'Parking Lot', 'active', '192.168.1.102', 1),
('Camera 3', 'Cafeteria', 'active', '192.168.1.103', 1),
('Camera 4', 'Hallway', 'maintenance', '192.168.1.104', 1);

-- Insert sample alerts
INSERT INTO alerts (camera_id, alert_type, description, status) VALUES 
(1, 'crowd', 'Unusual crowd gathering at main entrance', 'new'),
(2, 'crime', 'Suspicious activity in parking lot', 'in_progress'),
(3, 'work_violation', 'Safety protocol violation in cafeteria', 'resolved');
