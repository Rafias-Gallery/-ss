<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $product = $_POST['product'];
  $quantity = $_POST['quantity'];
  $total_price = $_POST['total_price'];

  $to = "asiburarave@gmail.com"; // replace this with your email address
  $subject = "New Product Order";
  $message = "A new product order has been placed by: \n\n" . 
             "Name: " . $name . "\n" .
             "Email: " . $email . "\n" .
             "Product: " . $product . "\n" .
             "Quantity: " . $quantity . "\n" .
             "Total Price: " . $total_price . "\n";
  $headers = "From: " . $email;

  mail($to, $subject, $message, $headers);
  echo "Your form has been submitted successfully!";
}

?>
