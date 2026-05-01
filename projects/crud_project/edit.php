<?php

require_once 'functions.php';

if (isset($_GET['expense_id'])) {
  $id = $_GET['expense_id'];
  $edit = edit_expense($id);
}

if (isset($_POST['update_btn'])) {
  $name = $_POST['name'];
  $category = $_POST['category_name'];
  $amount = $_POST['amount'];
  $date = $_POST['date'];
  $description = $_POST['description'];

  $insert_user_data = update_expense($id,$name, $category, $amount, $date, $description);

  if ($insert_user_data) {
    echo "<script>alert('Expense Updated'); window.location='index.php'</script>";
  } else {
    echo "<script>alert('Something Went Wrong'); window.location='index.php'</script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CRUD UI</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div class="wrapper">

    <!-- FORM -->
    <div class="card">
      <h2>Add Expense</h2>

      <form method="post">
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" value="<?php echo $edit[0]['name']; ?>" placeholder="Enter name" required>
        </div>

        <div class="form-group">
          <label>Category</label>
          <select name="category_name" required>
            <?php
            $user_data = get_category();

            foreach ($user_data as $value) {
            if ($value['category_id'] == $edit[0]['category_id']) {
              ?>
              <option value="<?php echo $value['category_id']; ?>" selected><?php echo $value['category_name']; ?></option>
            <?php
            }else {
              ?>
              <option value="<?php echo $value['category_id']; ?>"><?php echo $value['category_name']; ?></option>
            <?php
            }
            ?>
            <?php 
            }
            ?>
          </select>
        </div>

        <div class="form-group">
          <label>Amount</label>
          <input type="number" required name="amount" value="<?php echo $edit[0]['amount']; ?>" placeholder="Enter amount">
        </div>

        <div class="form-group">
          <label>Date</label>
          <input type="date" required name="date" value="<?php echo $edit[0]['date']; ?>">
        </div>

        <div class="form-group">
          <label>Description</label>
          <input type="text" required name="description" value="<?php echo $edit[0]['description']; ?>"></input>
        </div>

        <button type="submit" required name="update_btn">Add Expense</button>
      </form>
    </div>

  </div>

</body>

</html>