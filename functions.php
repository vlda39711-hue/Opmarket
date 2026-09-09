<?php
function display_products() {
    global $conn;
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<div class='product'>";
        echo "<h3>{$row['name']}</h3>";
        echo "<p>Цена: {$row['price']} руб.</p>";
        echo "</div>";
    }
}
?>