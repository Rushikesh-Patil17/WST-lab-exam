<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>All tasks</title>

    <script>
        function markComplete(element) {
            var id = element.name + element.id;
            var label = document.getElementById(id);
            var isComplete = 0;
            var request_id = element.id;
            if (!element.checked) {
                label.style = "text-decoration:none;";
                isComplete = 0;
            } else {
                label.style = "text-decoration:line-through;";
                isComplete = 1;
            }
            $.post("updateItem.php", {
                    id: element.id,
                    isComplete: isComplete
                },
                function(data, status) {
                    console.log("Data: " + data + "\nStatus: " + status);
                });
        }
    </script>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <?php include 'connection.php'; ?>
    <?php

    function getItem($id, $name, $category, $priority, $isComplete)
    {
        $isChecked = "";
        $style = "";
        if ($isComplete == 1) {
            $isChecked = "checked";
            $style = "text-decoration: line-through;";
        }

        $labelId = $name . $id;
        return "
        <input type='checkbox' name='$name' value='$name' $isChecked id='$id' onClick='markComplete(this)'>
        <label for='$name' style='$style' id='$labelId'>$name</label><br>
        <br>
        ";
    }

    $sql = "SELECT * FROM list ORDER BY category, priority DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        echo "<div class='mx-auto' style='max-width: 500px; margin-top: 30px;'>";
        while ($row = $result->fetch_assoc()) {
            $item = getItem($row['id'], $row["title"], $row["category"], $row["priority"], $row["isComplete"]);
            echo "$item";
        }
        echo "</div>";
    } else {
        echo "<h2>No Information found!</h2>";
    }
    // Close connection
    mysqli_close($conn);
    ?>
</body>

</html>