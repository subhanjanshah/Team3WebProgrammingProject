<?php 
include 'header.php';
include 'db.php';
?>

<div style="min-height: 70vh; display: flex; align-items: center; justify-content: center; flex-direction: column; font-family: 'Montserrat', sans-serif; background-color: #FBF6F0;">
    
    <?php 
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $subtotal = $_POST['subtotal'];

    $sql = "INSERT INTO cart (product_name, price, quantity, subtotal)
            VALUES ('$product_name', '$price', '$quantity', '$subtotal')";

    if ($conn->query($sql) === TRUE) {
        echo "<div style='text-align:center;'>";
        echo "<i class='fas fa-check-circle' style='font-size: 80px; color: #472717; margin-bottom: 20px;'></i>";
        echo "<h2 style='font-family: \"Playfair Display\", serif; font-size: 36px; color: #472717;'>Congratulations!</h2>";
        echo "<p style='font-size: 18px; color: #666; margin-bottom: 30px;'>Your order has been placed successfully.</p>";
        echo "<a href='menu.php' class='btn-box btn-box-dark' style='text-decoration: none;'>Return to Menu</a>";
        echo "</div>";
    } else {
        echo "<div style='text-align:center;'>";
        echo "<h2>Oops!</h2>";
        echo "<p>ERROR: " . $sql . "<br>" . $conn->error . "</p>";
        echo "</div>";
    }

    $conn->close();
    ?>
</div>
<?php include 'footer.php'; ?>
