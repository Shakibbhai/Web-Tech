
CREATE TABLE contacts (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    subject VARCHAR(50) NOT NULL,
    message TEXT NOT NULL
);

CREATE TABLE admins (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255),
    password VARCHAR(255)
);

-- Insert admin user
INSERT INTO admins (username, password) VALUES ('admin', MD5('123456'));

-- Insert sample contact data
INSERT INTO contacts (name, email, subject, message) VALUES ('Nazmus Shakib', 'bsse1452@iit.du.ac.bd', 'Bangla', 'i love bangla sometimes!');
INSERT INTO contacts (name, email, subject, message) VALUES ('Zahin abdullah', 'bsse1447@iit.du.ac.bd', 'English', 'I dont like English.');
INSERT INTO contacts (name, email, subject, message) VALUES ('Mainuddin', 'bsse1304@iit.du.ac.bd', 'CSE-101', 'this is structure programming!');
