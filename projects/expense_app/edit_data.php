<?php

require_once 'functions.php';

if (isset($_GET['expense_id'])) {
  $get_id = $_GET['expense_id'];
  $edit_user = edit_expense($get_id);
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
    <form class="space-y-5" method="post">

      <!-- Name -->
      <div class="group">
        <label class="block text-sm font-medium mb-1">Name</label>
        <input type="text" value="<?php echo $edit_user[0]['name'] ?>" placeholder="Expense name" name="name"
          class="w-full p-3 rounded-lg border border-gray-300 outline-none 
                 focus:ring-2 focus:ring-blue-500 transition duration-300
                 group-hover:scale-[1.01]" />
      </div>

      <!-- Category -->
      <div class="group">
        <label class="block text-sm font-medium mb-1">Category</label>
        <select name="category_name" value="<?php $edit_user[0]['category_id'] ?>"
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
                 group-hover:scale-[1.01]"><?php echo $edit_user[0]['description']; ?></textarea>
      </div>

      <!-- Amount -->
      <div class="group">
        <label class="block text-sm font-medium mb-1">Amount</label>
        <input type="number" value="<?php echo $edit_user[0]['amount'] ?>" placeholder="₹ 0.00" name="amount"
          class="w-full p-3 rounded-lg border border-gray-300 outline-none 
                 focus:ring-2 focus:ring-blue-500 transition duration-300
                 group-hover:scale-[1.01]" />
      </div>

      <!-- Date & Time -->
      <div class="group">
        <label class="block text-sm font-medium mb-1">Date & Time</label>
        <input type="date" value="<?php echo $edit_user[0]['add_date_and_time'] ?>" name="date"
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
  </div>
</body>

</html>