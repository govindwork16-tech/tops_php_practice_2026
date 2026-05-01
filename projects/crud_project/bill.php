<?php

require_once 'functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Invoice</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f5f5;
      padding: 20px;
    }

    .invoice {
      max-width: 800px;
      background: #fff;
      margin: auto;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .header {
      text-align: center;
      margin-bottom: 20px;
    }

    .header h1 {
      margin: 0;
    }

    .details {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table th,
    table td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: center;
    }

    table th {
      background: #007bff;
      color: white;
    }

    .total-section {
      margin-top: 20px;
      width: 100%;
    }

    .total-section td {
      padding: 10px;
    }

    .total-section tr td:first-child {
      text-align: right;
      font-weight: bold;
    }

    .grand-total {
      font-size: 18px;
      font-weight: bold;
      color: green;
    }

    @media print {
      #print_btn {
        display: none;
      }
    }
  </style>
</head>

<body>

  <div class="invoice">
    <div class="header">
      <h1>Invoice</h1>
      <p><?php echo date('D d/m/y'); ?></p>
    </div>

    <div class="details">

      <div>
        <strong>From:</strong><br>
        Your Company Name<br>
        India
      </div>
    </div>

    <table>
      <tr>
        <th>#</th>
        <th>Item Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Total</th>
      </tr>

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
        </tr>
      <?php
      }
      ?>
    </table>

    <table class="total-section">
      <tr>
        <td>Subtotal:</td>
        <td><?php $subtotal = get_total();
            echo $subtotal[0]['total_expense']; ?></td>
      </tr>
      <tr>
        <td>Tax (5%):</td>
        <td><?php
            $total = $subtotal[0]['total_expense'];
            $tax = $total * 0.05;
            echo $tax;
            ?></td>
      </tr>
      <tr>
        <td class="grand-total">Grand Total:</td>
        <td class="grand-total"><?php
                                $total = $subtotal[0]['total_expense'];
                                $tax = $total * 0.05;
                                echo $total + $tax;
                                ?></td>
      </tr>
    </table>
    <button class="total-btn" onclick="bill()" id="print_btn">Print</button>
  </div>

</body>
<script type="text/javascript">
  function bill() {
    window.print();
  }
</script>

</html>