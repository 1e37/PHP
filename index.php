<?php

/*
This Project contains the 25 most important concepts written in PHP.

1 Error Handling
2 Object oriented programming
3 Arrays
4 Schleife : foreach
5 
6 Controll Structures if/else
7
8
9
10
11
12
13
14
15
*/

// (1) Enable Error Handling
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start Date : 01-10-2024 : --
// END DATE : -- 01-10-2024 : ----

// (2) OOP and Inheritance
class Pizza {

    // The name of the pizza variant
    //public $name;
  
    // (3) Array declaration
    private $Geheimzutaten = ["wasser", "mehl", "hefe", "salz", "zucker"];
    public $PizzaTable = [];

    // Construct our objects
    public function __construct() {

    // Add products to the array by using function
      $this->addPizza("Margharita", 10.99);
      $this->addPizza("Hawaiian", 12.99);
      $this->addPizza("Chicken", 13.99);
      $this->addPizza("Fungi", 14.99);
    }

    // function to add a product to the array
    public function addPizza($name, $price) {
      $this->PizzaTable[] = ["name" => $name, "price" => $price];
    }

    // delete a product from array:
    // Take the Pizza name as argument
    // (4) - (5) (6) Grinds |  irritate foreach index in our array as 'i' and store the value in pizza meanwhile
    // When found, identified by name it removes the index from array.
    public function removePizza($name) {
      foreach ($this->PizzaTable as $i => $pizza) {
        if ($pizza["name"] == $name) {
          unset($this->PizzaTable[$i]);
          return true;
        }
      }
      return false;
    }

    // Function to get our current products
    public function getPizzaTable() {
      return $this->PizzaTable;
    }
  }

  

  // Inheritance from a Parent class with new specified attributes for the order.
  class Extras extends Pizza {
    public $crustType;
    public $extraIngedients;
  
    public function __construct($crustType, $extraIngedients) {
      $this->crustType = ["With Crust", "Without crust"];
      $this->$extraIngedients = $toppingOptions;
    }
  
    public function getPizzaExtraDetails() {
      return "Crust: $this->crustType, Sauce: $this->sauceType, Toppings: " . implode(", ", $this->toppingOptions);
    }
  }


  // Create an Instance of the "Pizza" Class so we can use its functions outside the Class itself.
    $pizza = new Pizza();
    $pizzaTable = $pizza->getPizzaTable();

// Define file for read/write operations 
$orders = 'placed_orders.txt';


function HelloRandom() {
    // fill the array with data
    $message_array = [
    "Willkommen in der Pizza Bäckerei",
    "Welcome to the Pizza Bakery",
    "Bienvenue à la pizzeria",
    "ピザベーカリーへようこそ",
    "Καλώς ήρθατε στο αρτοποιείο πίτσας"
    ];

    // Get the index[] and return data
    $random_key = array_rand($message_array);
    return $message_array[$random_key];
}

?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Shop</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

    <header>
      <h1><?php echo "🍕" . HelloRandom() ." 🍕"; ?></h1>   
    </header>
    <main>

    <section class="menu-table-container">
  <form action="" method="post">
    <div class="container">
      <div class="all"></div>
      <div class="HeaderMenu"><p><?php echo "🍴 Menu of the week🍴 <br> PHP-OOP" ?></p></div>
      <div class="Menu1">
        <ul>
          <p>Pizza </p>
          <?php
          foreach ($pizzaTable as $pizza) {
            echo "<li><input type='checkbox' name='pizza[]' value='" . $pizza["name"] . "'>" . $pizza["name"] . " - $" . $pizza["price"] . "</li>";
          }?>
        </ul>
      </div>
      <div class="Menu2">Pasta</div>
      <div class="ImageArea">
        <img src="https://cdn.shopify.com/s/files/1/0656/8915/7844/files/pizza_peel_9c0c6e62-02dc-4c05-86c1-cfe12025060d.jpg?v=1708416273"></div>
      <div class="etc">24/7</div>
      <button type="submit">Update Summary</button>
    </div>
  </form>
</section>

<section class="PriceAndProductSummary">
  <?php
  $totalPrice = 0;
  $selectedPizzas = [];
  if (isset($_POST['pizza'])) {
    foreach ($_POST['pizza'] as $pizzaName) {
      foreach ($pizzaTable as $pizza) {
        if ($pizza["name"] == $pizzaName) {
          $totalPrice += $pizza["price"];
          $selectedPizzas[] = $pizza["name"];
        }
      }
    }
    echo "<p>You have selected: " . implode(", ", $selectedPizzas) . ". Total price: $" . number_format($totalPrice, 2) . "</p>";
  } else {
    echo "<p>No pizzas selected.</p>";
  }
  ?>
</section>

        <!-- <section class="formular-container">

        
           
            <?php
            if (isset($erfolgsmeldung)) echo "<p class='erfolg'>$erfolgsmeldung</p>";
            if (isset($fehlermeldung)) echo "<p class='fehler'>$fehlermeldung</p>";
            ?>
            <form method="post" class="gaestebuch-formular">
                <label for="name">Dein Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="nachricht">Deine Nachricht:</label>
                <textarea id="nachricht" name="nachricht" required></textarea>

                <label for="stimmung">Deine Stimmung:</label>
                <select id="stimmung" name="stimmung">
                    <option value="fröhlich">😄 Fröhlich</option>
                    <option value="neutral" selected>😐 Neutral</option>
                    <option value="nachdenklich">🤔 Nachdenklich</option>
                    <option value="aufgeregt">🎉 Aufgeregt</option>
                </select>

                <button type="submit">Eintrag hinzufügen</button>
            </form>
        </section> -->

        <!-- <section class="eintraege-container">
            <h2>Gästebucheinträge</h2>
            <!-- <?php echo eintraegeAnzeigen(); ?> -->
        </section> -->
        <p>© <?php echo date('D-M-Y'); ?> Mein Supercooles Gästxxebuch</p>
        <footer>
       
    </footer> 
    </main>

  
</body>
</html> 

