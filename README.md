CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    hebergement VARCHAR(255) NOT NULL,
    adults INT NOT NULL,
    children INT DEFAULT 0,
    card_number VARCHAR(20),
    card_name VARCHAR(100),
    expiry_date VARCHAR(10),
    cvv VARCHAR(10),
    total DECIMAL(10,2)
);
