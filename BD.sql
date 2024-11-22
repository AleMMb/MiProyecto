-- Crear tabla de categorías
CREATE TABLE categories (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);


-- Crear tabla de productos
CREATE TABLE products (
    id SERIAL PRIMARY KEY,        
    name VARCHAR(255) NOT NULL,
    img VARCHAR (500) NOT NULL,
    description TEXT,
    price NUMERIC(10, 2) NOT NULL,
    category_id INT NOT NULL,
    FOREIGN KEY (category_id) REFERENCES categories (id) ON DELETE CASCADE
);