-- some data for test query

-- For the Customers table:
    INSERT INTO Customers (customer_id, name, email, location)
    VALUES
        (1, 'John Doe', 'john.doe@email.com', 'New York, USA'),
        (2, 'Alice Smith', 'alice.smith@email.com', 'Los Angeles, USA'),
        (3, 'Bob Johnson', 'bob.johnson@email.com', 'Chicago, USA'),
        (4, 'Emma Davis', 'emma.davis@email.com', 'San Francisco, USA'),
        (5, 'Michael Brown', 'michael.brown@email.com', 'Houston, USA');

-- For the orders Table:
    INSERT INTO Orders (order_id, customer_id, order_date, total_amount)
    VALUES
        (1, 1, '2023-01-15', 100.50),
        (2, 5, '2023-01-16', 75.25),
        (3, 3, '2023-01-17', 120.75),
        (4, 4, '2023-01-18', 50.20),
        (5, 5, '2023-01-19', 90.75);

-- For the Products Table:
    INSERT INTO Products (product_id, name, description, price, category_id)
    VALUES
        (1, 'Product A', 'Description for Product A', 10.99, 1),
        (2, 'Product B', 'Description for Product B', 15.75, 2),
        (3, 'Product C', 'Description for Product C', 25.50, 1),
        (4, 'Product D', 'Description for Product D', 5.99, 2),
        (5, 'Product E', 'Description for Product E', 12.25, 1);

-- For the Categories Table:
    INSERT INTO Categories (category_id, name)
    VALUES
        (1, 'Category 1'),
        (2, 'Category 2'),
        (3, 'Category 3'),
        (4, 'Category 4'),
        (5, 'Category 5');

-- For the Order_Items Table:
    INSERT INTO Order_Items (order_item_id, order_id, product_id, quantity, unit_price)
    VALUES
        (1, 1, 1, 3, 10.99),
        (2, 1, 2, 2, 15.75),
        (3, 2, 3, 1, 25.50),
        (4, 3, 4, 4, 5.99),
        (5, 4, 5, 2, 12.25);
