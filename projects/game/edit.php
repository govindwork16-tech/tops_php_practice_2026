<?php

require_once 'functions.php';


if (isset($_GET['edit_id'])) {
  $edit_id = $_GET['edit_id'];
  $fetch_user = edit_game($edit_id);
}

if (isset($_POST['update_btn'])) {
  $player_id = $_GET['edit_id'];
  $player_name = $_POST['player_name'];
  $name = $_POST['name'];
  $place = $_POST['place'];
  $animal = $_POST['animal'];
  $thing = $_POST['thing'];

  if (update($player_id, $player_name, $name, $place, $animal, $thing)) {
    echo "<script>
        alert('Task updated successfully');
        window.location='index.php';
        </script>";
  } else {
    echo "<script>
        alert('Something Went Wrong');
        window.location='index.php';
        </script>";
  }
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
      <div class="col-lg-4 mx-auto">
        <div class="card-custom">
          <h4 class="title">🎮 Enter Details</h4>

          <form method="POST">

            <div class="mb-3">
              <label>Player Name</label>
              <input type="text" value="<?php echo $fetch_user[0]['player_name'] ?>" name="player_name" class="form-control" placeholder="Enter name" required>
            </div>

            <div class="mb-3">
              <label>Name</label>
              <input type="text" value="<?php echo $fetch_user[0]['name'] ?>" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
              <label>Place</label>
              <input type="text" value="<?php echo $fetch_user[0]['place'] ?>" name="place" class="form-control" required>
            </div>

            <div class="mb-3">
              <label>Animal</label>
              <input type="text" value="<?php echo $fetch_user[0]['animal'] ?>" name="animal" class="form-control" required>
            </div>

            <div class="mb-3">
              <label>Thing</label>
              <input type="text" value="<?php echo $fetch_user[0]['thing'] ?>" name="thing" class="form-control" required>
            </div>

            <div class="d-grid">
              <button name="update_btn" class="btn btn-custom">Update</button>
            </div>

          </form>
        </div>
      </div>

    </div>
  </div>

  </div>
  </div>

</body>

</html>