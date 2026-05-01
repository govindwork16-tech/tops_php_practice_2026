<?php

require_once 'functions.php';

if (isset($_POST['submit_btn'])) {
  $name = $_POST['name'];
  $category = $_POST['category_name'];
  $amount = $_POST['amount'];
  $date = $_POST['date'];
  $description = $_POST['description'];

  $insert_user_data = insert_data($name, $category, $amount, $date, $description);

  if ($insert_user_data) {
    echo header('location: index.php');
  } else {
    echo "<script>alert('Something Went Wrong'); window.location=index.php</script>";
  }
}

if (isset($_GET['expense_id'])) {
  $id = $_GET['expense_id'];
  $delete_expense = delete_expense($id);
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
          <input type="text" name="name" placeholder="Enter name" required>
        </div>

        <div class="form-group">
          <label>Category</label>
          <select name="category_name" required>
            <option>Select</option>
            <?php
            $user_data = get_category();

            foreach ($user_data as $value) {
            ?>
              <option value="<?php echo $value['category_id']; ?>"><?php echo $value['category_name']; ?></option>
            <?php
            }
            ?>
          </select>
        </div>

        <div class="form-group">
          <label>Amount</label>
          <input type="number" required name="amount" placeholder="Enter amount">
        </div>

        <div class="form-group">
          <label>Date</label>
          <input type="date" required name="date">
        </div>

        <div class="form-group">
          <label>Description</label>
          <input type="text" required name="description"></input>
        </div>

        <button type="submit" required name="submit_btn">Add Expense</button>
      </form>
    </div>

    <div class="card">
      <h2>Expense List</h2>
      <button class="total-btn">
        <b>Total Expenses:</b><?php $arr = get_expense(); echo $arr[0]['all_expense']; ?>
      </button>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Amount</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <?php

          $display_row = get_details();

          foreach ($display_row as $row) {
          ?>
            <tr>
              <td><?php echo $row['expense_id']; ?></td>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['category_name']; ?></td>
              <td><?php echo $row['amount']; ?></td>
              <td><?php echo $row['date']; ?></td>
              <td>
                <a href="edit.php?expense_id=<?php echo $row['expense_id']; ?>" class="action-btn edit">Edit</a>
                <a href="index.php?expense_id=<?php echo $row['expense_id']; ?>" onclick="return confirm('Are You Sure?')" class="action-btn delete">Delete</a>
              </td>
            </tr>
          <?php
          }
          ?>

          <!-- GRAND TOTAL ROW -->
          <tr style="font-weight: bold; background: #f8f9fa;">
            <td colspan="6">Total: <?php $subtotal = get_total(); echo $subtotal[0]['total_expense']; ?></td>
          </tr>

        </tbody>
      </table>
      <a href="bill.php">Print Bill</a>
    </div>
  </div>

</body>

</html>