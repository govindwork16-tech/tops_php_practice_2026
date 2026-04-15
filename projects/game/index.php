<?php

require_once 'functions.php';


if (isset($_POST['submit_btn'])) {
  date_default_timezone_set('Asia/Calcutta');
  $player_name = $_POST['player_name'];
  $name = $_POST['name'];
  $place = $_POST['place'];
  $animal = $_POST['animal'];
  $thing = $_POST['thing'];
  $time = date('d/m/y h:i:s');
  if (add_game($player_name, $name, $place, $animal, $thing, $time)) {
    echo header("Location: index.php");
  } else {
    echo "<script>alert('Something Went Wrong');</script>";
  }
}

if (isset($_GET['edit_id'])) {
  $edit_id = $_GET['edit_id'];
  $fetch_user = edit_game($edit_id);
}

if (isset($_GET['delete_id'])) {
  $delete_id = $_GET['delete_id'];
  $delete_user = delete($delete_id);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Game UI</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #667eea, #764ba2);
      min-height: 100vh;
      padding: 30px;
      font-family: 'Segoe UI', sans-serif;
    }

    .card-custom {
      background: #fff;
      border-radius: 20px;
      padding: 25px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      height: 100%;
    }

    .title {
      font-weight: 700;
      margin-bottom: 20px;
      text-align: center;
    }

    .form-control {
      border-radius: 10px;
      padding: 10px;
    }

    .btn-custom {
      background: #764ba2;
      color: white;
      border-radius: 10px;
      font-weight: 600;
    }

    .btn-custom:hover {
      background: #5a3791;
    }

    table {
      border-radius: 10px;
      overflow: hidden;
    }

    thead {
      background: #764ba2;
      color: white;
    }

    .btn-warning,
    .btn-danger {
      transition: 0.3s ease;
    }

    .btn-warning:hover {
      transform: scale(1.05);
      background-color: #e0a800;
    }

    .btn-danger:hover {
      transform: scale(1.05);
      background-color: #c82333;
    }
  </style>
</head>

<body>

  <div class="container-fluid">
    <div class="row g-4">

      <!-- LEFT: FORM -->
      <div class="col-lg-4">
        <div class="card-custom">
          <h4 class="title">🎮 Enter Details</h4>

          <form method="post">

            <div class="mb-3">
              <label>Player Name</label>
              <input type="text" name="player_name" class="form-control" placeholder="Enter name" required>
            </div>

            <div class="mb-3">
              <label>Name</label>
              <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
              <label>Place</label>
              <input type="text" name="place" class="form-control" required>
            </div>

            <div class="mb-3">
              <label>Animal</label>
              <input type="text" name="animal" class="form-control" required>
            </div>

            <div class="mb-3">
              <label>Thing</label>
              <input type="text" name="thing" class="form-control" required>
            </div>

            <div class="d-grid">
              <button name="submit_btn" class="btn btn-custom">Submit</button>
            </div>

          </form>
        </div>
      </div>

      <!-- RIGHT: TABLE -->
      <div class="col-lg-8">
        <div class="card-custom">
          <h4 class="title">📊 Game Entries</h4>

          <div class="table-responsive">
            <table class="table table-bordered table-hover text-center align-middle">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Player</th>
                  <th>Name</th>
                  <th>Place</th>
                  <th>Animal</th>
                  <th>Thing</th>
                  <th>Time</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

                <!-- Example Row -->

                <?php
                $arr = get_game();
                foreach ($arr as $values) {
                ?>
                  <tr>
                    <td><?php echo $values['player_id'] ?></td>
                    <td><?php echo $values['player_name'] ?></td>
                    <td><?php echo $values['name'] ?></td>
                    <td><?php echo $values['place'] ?></td>
                    <td><?php echo $values['animal'] ?></td>
                    <td><?php echo $values['thing'] ?></td>
                    <td><?php echo $values['date_time'] ?></td>
                    <td>
                      <div class="d-flex justify-content-center gap-2">
                        <a href="edit.php?edit_id=<?php echo $values['player_id']; ?>" class="btn btn-sm btn-warning px-3">✏️ Edit</a>
                        <a href="index.php?delete_id=<?php echo $values['player_id']; ?>" onclick="confirm('Are You Sure?');" class="btn btn-sm btn-danger px-3">🗑️ Delete</a>
                      </div>
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

    </div>
  </div>

</body>

</html>