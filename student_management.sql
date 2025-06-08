-- Krijimi i databazës
CREATE DATABASE IF NOT EXISTS student_management;
USE student_management;

-- Tabela e përdoruesve
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'student') NOT NULL DEFAULT 'student',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Shtimi i një admini testues
INSERT INTO users (email, password, role)
VALUES (
    'admin@example.com',
    -- Password: admin123 (i enkriptuar me password_hash në PHP)
    '$2y$10$tV1ZygUXmfTkp1tPFeMuD.cZTnHMGsOm1Ikx.9cEXfbPaQpNJba2K',
    'admin'
);

-- Shtimi i një studenti testues
INSERT INTO users (email, password, role)
VALUES (
    'student@example.com',
    -- Password: student123 (i enkriptuar me password_hash në PHP)
    '$2y$10$VW2qIXeZkOEKzZzDpLGOYO9nr5Y9JwpiEMGL1r2qok22gpgagM3ym',
    'student'
);
