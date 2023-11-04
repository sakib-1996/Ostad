
-- The database contains the following tables:

-- Customers: Contains information about the customers, such as customer ID, name, email, and location.
    CREATE TABLE Customers (
        customer_id INT PRIMARY KEY,
        name VARCHAR(100),
        email VARCHAR(100),
        location VARCHAR(100)
    );

-- Orders: Contains information about the orders placed by customers, such as order ID, customer ID, order date, and total amount.
    CREATE TABLE Orders (
        order_id INT PRIMARY KEY,
        customer_id INT,
        order_date DATE,
        total_amount DECIMAL(10, 2),
        FOREIGN KEY (customer_id) REFERENCES Customers(customer_id)
    );

-- Products: Contains information about the products available for purchase, such as product ID, name, description, and price.
    CREATE TABLE Products (
        product_id INT PRIMARY KEY,
        name VARCHAR(100),
        description TEXT,
        price DECIMAL(10, 2)
    );


-- Categories: Contains information about the different categories of products, such as category ID and name.
    CREATE TABLE Categories (
        category_id INT PRIMARY KEY,
        name VARCHAR(100)
    );

-- Order_Items: Contains information about the individual items included in each order, such as order item ID, order ID, product ID, quantity, and unit price.
    CREATE TABLE Order_Items (
        order_item_id INT PRIMARY KEY,
        order_id INT,
        product_id INT,
        quantity INT,
        unit_price DECIMAL(10, 2),
        FOREIGN KEY (order_id) REFERENCES Orders(order_id),
        FOREIGN KEY (product_id) REFERENCES Products(product_id)
    );

    ALTER TABLE Products ADD COLUMN category_id INT;
    ALTER TABLE Products ADD FOREIGN KEY (category_id) REFERENCES Categories(category_id);
