<!-- Modiul 4 assignment  -->

<?php
class Product {
    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

// Add getFormattedPrice method
    public function getFormattedPrice() {
        return '$' . number_format($this->price, 2);
    }

// TODO: Add showDetails method
    public function showDetails() {
        echo "Product Details:\n";
        echo "- ID: {$this->id}\n";
        echo "- Name: {$this->name}\n";
        echo "- Price: {$this->getFormattedPrice()}\n";
    }
}

// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();


/* Expected Output:
   * Product Details:
   * - ID: 1
   * - Name: T-shirt
   * - Price: $19.99 
*/
