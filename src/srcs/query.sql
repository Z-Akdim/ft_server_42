GRANT ALL PRIVILEGES ON phpmyadmin.* TO 'test'@'localhost' IDENTIFIED BY 'test';
CREATE DATABASE wordpress;
GRANT ALL PRIVILEGES ON wordpress.* TO 'test'@'localhost' IDENTIFIED BY 'test';
FLUSH PRIVILEGES;