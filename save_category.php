<!DOCTYPE html>
<html>
<body>
    <?php include 'connection.php'; ?>
    <?php
        if ($_POST['action']) {
            $name = $_REQUEST['name'];
            $desc = $_REQUEST['desc'];
    
            $sql = "INSERT INTO category VALUES ('$name', '$desc')";

            if (mysqli_query($conn, $sql)) {
                "<h3>Data stored in a database successfully!</h3>";
            } else {
                echo "<h3>Data storage failed!</h3>" . mysqli_error($conn);
            }

            mysqli_close($conn);
        }
    ?>
</body>
</html>