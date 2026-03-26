<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Max Number</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

  <?php 
    if (isset($_POST['submit_button'])) {
      $number_1 = $_POST['number_1'];
      $number_2 = $_POST['number_2'];
      $number_3 = $_POST['number_3'];

      number_check($number_1, $number_2, $number_3);
    }

    function number_check($number_1,$number_2,$number_3) {
      if ($number_1 > $number_2 && $number_1 > $number_3) {
        echo 'Number 1 Is Greater';
      }
      elseif ($number_2 > $number_1 && $number_2 > $number_3) {
        echo 'Number 2 is greater';
      }
      elseif ($number_3 > $number_1 && $number_3 > $number_2) {
        echo 'Number 3 is greater';
      }
      else {
        echo 'Something went wrong all numbers are equal';
      }
    }
  ?>

<body>

  <div class="container">
    <form method="post">
      <div class="form-group">
        <input type="text" name="number_1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Number 1">
      </div>
      <div class="form-group">
        <input type="text" name="number_2" class="form-control" id="exampleInputPassword1" placeholder="Number 2">
      </div>
      <div class="form-group">
        <input type="text" name="number_3" class="form-control" id="exampleInputPassword1" placeholder="Number 3">
      </div>
      <button type="submit" name="submit_button" class="btn btn-primary">Submit</button>
    </form>
  </div>

</body>

</html>