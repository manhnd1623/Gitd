<?php include 'includes/header.php'; ?>
<?php include 'db/connection.php'; ?>

<div class="category-section">
    <h2>Danh Mục Sản Phẩm</h2>
    <div class="categories">
        <?php
        $result = $conn->query("SELECT * FROM categories");
        while ($row = $result->fetch_assoc()) {
            echo "<div class='category'><h3>{$row['name']}</h3></div>";
        }
        ?>
    </div>
</div>

<div class="product-section">
    <h2>Top Sản Phẩm Bán Chạy</h2>
    <div class="products">
        <?php
        $result = $conn->query("SELECT * FROM products LIMIT 4");
        while ($row = $result->fetch_assoc()) {
            echo "<div class='product'>
                    <img src='images/{$row['image']}' alt='{$row['name']}'>
                    <h3>{$row['name']}</h3>
                    <p>Price: {$row['price']} VND</p>
                  </div>";
        }
        ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
