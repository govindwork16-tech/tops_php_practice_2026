<?php

require_once 'functions.php';

// Add Expense

if (isset($_POST['submit_btn'])) {
  date_default_timezone_set('Asia/Calcutta');
  $name = $_POST['name'];
  $category_name = $_POST['category_name'];
  $description = $_POST['description'];
  $amount = $_POST['amount'];
  $date = $_POST['date'];

  if (insert_expense($name, $category_name, $description, $amount, $date)) {
    echo "<script>alert('Expense added Successfully'); window.location = 'index.php';</script>";
  } else {
    echo "<script>alert('Something went wrong'); window.location = 'index.php';</script>";
  }
}

if (isset($_GET['expense_id'])) {
  $expense_id = $_GET['expense_id'];
  $data = edit_expense($expense_id);
}

if (isset($_GET['delete_id'])) {
  $del_id = $_GET['delete_id'];

  if (delete_expense($del_id)) {
    echo "<script>
alert('expense deleted successfully')
window.location='index.php';
</script>";
  }else {
    "<script>
alert('something went wrong')
window.location='index.php';
</script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add Expense</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-100 to-purple-200 p-6">

  <div class="w-full max-w-4xl bg-white/90 backdrop-blur-lg rounded-2xl shadow-xl p-8 animate-[fadeIn_0.7s_ease]">

    <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">
      Add Expense
    </h2>

    <form class="space-y-5" method="post">

      <!-- Name -->
      <div class="group">
        <label class="block text-sm font-medium mb-1">Name</label>
        <input type="text" placeholder="Expense name" name="name"
          class="w-full p-3 rounded-lg border border-gray-300 outline-none 
                 focus:ring-2 focus:ring-blue-500 transition duration-300
                 group-hover:scale-[1.01]" />
      </div>

      <!-- Category -->
      <div class="group">
        <label class="block text-sm font-medium mb-1">Category</label>
        <select name="category_name"
          class="w-full p-3 rounded-lg border border-gray-300 outline-none 
                 focus:ring-2 focus:ring-blue-500 transition duration-300
                 group-hover:scale-[1.01]">

          <?php
          $arr = get_category();

          foreach ($arr as $values) {
          ?>

            <option value="<?php echo $values["category_id"]; ?>"><?php echo $values["category_name"]; ?></option>

          <?php
          }
          ?>
        </select>
      </div>

      <!-- Description -->
      <div class="group">
        <label class="block text-sm font-medium mb-1">Description</label>
        <textarea rows="3" placeholder="Add description" name="description"
          class="w-full p-3 rounded-lg border border-gray-300 outline-none 
                 focus:ring-2 focus:ring-blue-500 transition duration-300
                 group-hover:scale-[1.01]"></textarea>
      </div>

      <!-- Amount -->
      <div class="group">
        <label class="block text-sm font-medium mb-1">Amount</label>
        <input type="number" placeholder="₹ 0.00" name="amount"
          class="w-full p-3 rounded-lg border border-gray-300 outline-none 
                 focus:ring-2 focus:ring-blue-500 transition duration-300
                 group-hover:scale-[1.01]" />
      </div>

      <!-- Date & Time -->
      <div class="group">
        <label class="block text-sm font-medium mb-1">Date & Time</label>
        <input type="date" name="date"
          class="w-full p-3 rounded-lg border border-gray-300 outline-none 
                 focus:ring-2 focus:ring-blue-500 transition duration-300
                 group-hover:scale-[1.01]" />
      </div>

      <!-- Submit Button -->
      <button name="submit_btn"
        class="w-full bg-blue-600 text-white font-semibold py-3 rounded-xl
               hover:bg-blue-700 hover:scale-[1.03]
               active:scale-95 transition-all duration-300 shadow-md">
        Add Expense
      </button>

    </form>

    <!-- Total by Category -->
    <!-- Total by Category (Detailed View) -->
    <div class="w-full max-w-4xl bg-white/90 backdrop-blur-lg rounded-2xl shadow-xl p-6 mt-8 animate-[fadeIn_0.7s_ease]">

      <h3 class="text-2xl font-bold text-gray-800 mb-4 text-center">
        Total by Category (All Details)
      </h3>

      <!-- Table -->
      <div class="overflow-x-auto">
        <table class="w-full border-collapse">
          <thead>
            <tr class="bg-blue-600 text-white text-sm">
              <th class="p-3 text-left">Name</th>
              <th class="p-3 text-left">Category</th>
              <th class="p-3 text-left">Description</th>
              <th class="p-3 text-left">Amount</th>
              <th class="p-3 text-left">Date & Time</th>
              <th class="p-3 text-left">Action</th>
            </tr>
          </thead>

          <tbody class="text-gray-700 text-sm">
            <?php
            $expense_arr = get_expense();
            foreach ($expense_arr as $value) {

            ?>
              <tr class="border-b hover:bg-blue-50 transition duration-300">
                <td class="p-3 font-semibold"><?php echo $value['name'] ?></td>
                <td class="p-3"><?php echo $value['category_name'] ?></td>
                <td class="p-3"><?php echo $value['description'] ?></td>
                <td class="p-3 font-medium"><?php echo $value['amount'] ?></td>
                <td class="p-3"><?php echo $value['add_date_and_time'] ?></td>
                <td class="p-3"><a href="edit_data.php?expense_id=<?php echo $value['expense_id']; ?>" class="bg-blue-500 p-3 text-white rounded-2xl">Edit</a> <a href="index.php?delete_id=<?php echo $value['expense_id']; ?>" class="bg-red-500 p-3 text-white rounded-2xl" onclick="return confirm('Are you sure to delete Data ?')" >Delete</a> </td>
              <?php
            }
              ?>
              </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>

  <!-- Animation -->
  <style>
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(15px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>

</body>

</html>