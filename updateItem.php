<!DOCTYPE html>
<html>

<body>
    <?php include 'connection.php'; ?>
    <?php
    $id = $_REQUEST['id'];
    $isComplete = $_REQUEST['isComplete'];
    echo "$id $isComplete";

    $sql = "UPDATE list SET isComplete = $isComplete WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        "<h3>Data updated in database successfully!</h3>";
    } else {
        echo "<h3>Data update failed!</h3>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>
</body>

</html>