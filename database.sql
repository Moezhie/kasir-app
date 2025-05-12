CREATE DATABASE kasir_db;
USE kasir_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('kasir', 'admin') NOT NULL
);

CREATE TABLE transaksi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    total INT,
    tanggal DATE,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Insert contoh user (password: 123456)
INSERT INTO users (username, password, role) 
VALUES ('admin', '$2y$10$5z5t9z7z7z7z7z7z7z7z7u5z5t9z7z7z7z7z7z7z7u', 'admin');