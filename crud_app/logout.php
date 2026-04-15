
<?php
  require_once 'functions.php';

  if(isset($_GET['logoutid'])) {
    if (logout()) {
      echo "<script>
        alert('You are logout successfully'); window.location='user_login.php';
        </script>";
    }
  }

?> 