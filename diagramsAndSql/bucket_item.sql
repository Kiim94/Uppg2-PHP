CREATE TABLE bucket_item(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(200) NOT NULL,
    description TEXT,
    priority INT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP 
)