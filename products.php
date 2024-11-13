<?php include 'includes/header.php'; ?>
<?php include 'db/connection.php'; ?>

<h2>Sản Phẩm</h2>
<div class="products">
    <?php
    $result = $conn->query("SELECT * FROM products");
    while ($row = $result->fetch_assoc()) {
        echo "<div class='product'>
                <img src='images/{$row['image']}' alt='{$row['name']}'>
                <h3>{$row['name']}</h3>
                <p>Price: {$row['price']} VND</p>
              </div>";
    }
    ?>
</div>

<?php include 'includes/footer.php'; ?>
