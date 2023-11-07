<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="#">
        <label for="id">Id of product you want to remove</label>
        <input type="text" name="id">
        <input type="submit" value="remove" name="delete">
    </form>

    <?php 
    include 'var.php';
    if(isset($_POST['delete'])){
        $id = $_POST['id'];

        // sql to delete a record
        $sql = "DELETE FROM products WHERE id=$id";

        if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
        } else {
        echo "Error deleting record: " . mysqli_error($conn);
        }

        mysqli_close($conn);
            }
    ?>
</body>
</html>