database/populate.sql
-- إدخال بيانات تجريبية للمطاعم
USE restaurant_db;

INSERT INTO restaurants (name, cuisine, rating) VALUES
('La Bella', 'Italian', 4.5),
('Sushi House', 'Japanese', 4.8),
('Burger Town', 'Fast Food', 4.0),
('Taco Fiesta', 'Mexican', 4.2),
('Curry Corner', 'Indian', 4.7);