<?php
    include 'var.php';

    $sql = "SELECT * FROM products ORDER BY id DESC";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)) {

    echo"<div class='Blog'>";
    echo "<div class='Blog_card' id={$row['id']}>";
    echo"<h4>{$row['name']}</h4>";
    echo "<img src='../img/" . $row['image'] . "'>";
    echo"<p>{$row['price']}</p>";
    echo"<p>{$row['description']}</p>";
    echo"</div>";
    echo"</div>";
    }
?>