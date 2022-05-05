<!DOCTYPE html>
<html>
<body>
    <?php include 'connection.php'; ?>
    <?php
        if ($_POST['action']) {
            $name = $_REQUEST['name'];
            $priority = $_REQUEST['priority'];
            $category = $_REQUEST['category'];
            $isComplete = 0;

            $sql = "INSERT INTO list(title, category, priority, isComplete) VALUES ('$name', '$category', '$priority', $isComplete)";

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