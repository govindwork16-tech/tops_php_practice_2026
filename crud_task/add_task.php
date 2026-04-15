<?php

require_once 'include/functions.php';
require_once 'include/header_links.php';


if (isset($_POST['add_task'])) {

  $task = $_POST['task'];
  $crud_task = add_task($task);

  if ($crud_task) {
    echo "<script>alert('task added successfully');</script>";
  } else {
    echo "<script>alert('something went wrong');</script>";
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Task</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">

        <div class="card">
          <div class="card-header text-center">
            <h4>Add Task</h4>
          </div>

          <div class="card-body">
            <form method="post">

              <div class="mb-3">
                <label class="form-label">Task Title</label>
                <input type="text" name="task" class="form-control" placeholder="Enter task title" required>
              </div>

              <div class="d-flex justify-content-between">
                <button type="submit" name="add_task" class="btn btn-primary">Add Task</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
              </div>

            </form>
          </div>
        </div>

        <table class="table table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Task</th>
            </tr>
          </thead>
          <tbody>

            <?php
            $tasks = display_task();

            while ($row = mysqli_fetch_assoc($tasks)) {
            ?>
              <tr>
                <td><?php echo $row['task_id']; ?></td>
                <td><?php echo $row['tasks']; ?></td>

                <td>
                  <a href="" class="btn btn-warning btn-sm">Edit</a>
                  <a href="" class="btn btn-danger btn-sm">Delete</a>
                </td>
              </tr>
            <?php
            }
            ?>

          </tbody>
        </table>

      </div>
    </div>
  </div>

</body>

</html>