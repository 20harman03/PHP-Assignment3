<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
  $pageTitle = "Place Order";
  include 'templates/header.php';
  ?>
 
  <div class="centered">
    <div>
      <h3>Place Your Order</h3>
      <form action="thank_you.php" method="post">
        <label for="product">Select Product:</label>
        <select id="product" name="product" required>
          <option value="ring">Ring</option>
          <option value="necklace">Necklace</option>
          <option value="bracelet">Bracelet</option>
        </select>
        <br><br>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required>
        <br><br>
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>
        <br><br>
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" required>
        <br><br>
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <div class="button">
          <button id="placeOrderButton">Place Order</button>
        </div>
      </form>
    </div>
  </div>
  <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // Process the order (e.g., save to database, send email confirmation, etc.)

    // Redirect to a thank you page
    header("Location: thank_you.php");
    exit;
} 
?>

   <script>
    document.getElementById("openPageButton").addEventListener("click", function() {
        window.location.href = "done.php";
    });
</script>
</body>
<?php include 'templates/footer.php'; ?>

