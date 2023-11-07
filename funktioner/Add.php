<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post" enctype="multipart/form-data">
        <label for="productName">Product Name</label>
        <input type="text" name="productName" required>

        <label for="productDesc">Product Description</label>
        <input type="text" name="productDesc">

        <label for="productPrice">Price</label>
        <input type="number" name="productPrice" required min="0" max="10000">

        <label for="img">Image</label>
        <input type="file" name="img" required>

        <input type="submit" name="submit" value="Add Product" >
    </form>

    <?php 
    include 'var.php';
    //check if form was submited
    if(isset($_POST['submit'])){
        //check if a file was uploaded
        if(!empty($_FILES['img']['tmp_name'])){
            //get uploaded file's name and tmp file's name
            $filename = $_FILES['img']['name'];
            $tmpname = $_FILES['img']['tmp_name'];
 
            if (!move_uploaded_file($tmpname, "../img/$filename")) {
            $error = error_get_last();
            echo "Error: " . $error['message'];
        }


            //get the name,description and price
            $name = $_POST['productName'];
            $desc = $_POST['productDesc'];
            $price = $_POST['productPrice'];

            $sql = "INSERT INTO products (name, description, price, image) VALUES ('$name', '$desc', '$price','$filename')";

            if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            mysqli_close($conn);
        }
    }

    ?>
</body>
</html>