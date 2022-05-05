<html>
<?php include 'save_item.php'; ?>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Add a new Task</title>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="mx-auto" style="max-width: 500px; margin-top: 20px;">
        <form action="add_item.php" method="post">
            <div class="form-group">
                <label for="name">Task Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Categoty Name">
            </div>

            <div class="form-group">
                <label for="priority">Task Priority</label>
                <input type="number" min="0" max="10" class="form-control" id="priority" name="priority" placeholder="Enter Task Priority">
            </div>

            <div class="form-group">
                <label for="category">Task Category</label>
                <input type="text" class="form-control" id="category" name="category" placeholder="Enter Task Category">
            </div>

            <button type="submit" class="btn btn-primary" name="action" value="Add">Add</button>
            <button type="reset" class="btn btn-secondary">Clear</button>
        </form>
    </div>
</body>

</html>