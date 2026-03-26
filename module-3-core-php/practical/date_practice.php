<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>


// function date_check()
// {
//   if (isset($_POST['submit_btn'])) {
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     date_default_timezone_set('Asia/Kolkata');

//     $current_date_time = date('d-m-y h:i a');

//     if ($email == 'admin@example.com' && $password == 'admin123') {
//       return "Login successful! At $current_date_time";
//     } else {
//        return "Invalid email or password.";
//     }
//   }
//   return '';
// }

// $message = date_check();

<body>

  <div class="container">
  <h1></h1>

    <form method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <button type="submit" name="submit_btn" class="btn btn-primary">Submit</button>
    </form>
  </div>

</body>

</html> -->

<?php 
  function time_check() {
    date_default_timezone_set('Asia/Kolkata');
    $current_time = date('H');
    $name = "Govind";
    $day = date('l');
    $time = date('H:i');
    if ($current_time >= 5 && $current_time < 12) {
      return "good morning $name <br> today is $day <br> time is $time";
    } elseif ($current_time >= 12  && $current_time < 17) {
      return "good afternoon $name <br> today is $day <br> time is $time";
    }elseif ($current_time >= 17 && $current_time < 21) {
      return "good evening $name <br> today is $day <br> time is $time";
    } else {
      return "good night $name <br> today was $day <br> time is $time so please Now sleep well";
    }
  }

  echo time_check();
?>