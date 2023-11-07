<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <label for="id">Id of product you want to change</label>
        <input type="text" name="id">
        <label for="price">Change Price</label>
        <input type="number" name="price">
        <label for="img">Change Image</label>
        <input type="file" name="img">
        <input type="submit" value="Update" name="update">
    </form>
<?php 
include 'var.php';

if(isset($_POST['update'])){
    if(!empty($_FILES['img']['tmp_name'])){
        //get uploaded file's name and tmp file's name
        $filename = $_FILES['img']['name'];
        $tmpname = $_FILES['img']['tmp_name'];

        if (move_uploaded_file($tmpname, "../img/$filename")) {
            $price = $_POST['price'];
            $id = $_POST['id'];

            $sql = "UPDATE products SET price='$price', image='$filename' WHERE id=$id";

            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        } else {
            $error = error_get_last();
            echo "Error: " . $error['message'];
        }
    }
}
?>

</body>
</html>