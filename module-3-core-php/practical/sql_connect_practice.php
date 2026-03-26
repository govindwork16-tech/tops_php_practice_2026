<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Post Cards</title>

  <?php

  $sql_conn = mysqli_connect('localhost', 'root', '', 'sql_connect');

  if (!$sql_conn) {
    echo "Database Not Connected";
  }

  if (isset($_POST["add_post"])) {
    $post_title = mysqli_real_escape_string($sql_conn,$_POST["post_title"]);
    $post_content = mysqli_real_escape_string($sql_conn,$_POST["post_content"]);
    $post_date = date("d/m/y h:i:s a");

    $post_connect = "insert into users(post_title, post_content, post_date) values('$post_title', '$post_content', '$post_date')";
    $post_add = mysqli_query($sql_conn, $post_connect);

    if ($post_add) {
      echo "<script>alert('Post Added');
        window.location.href=window.location.href;
        </script>";
    }
  }
  ?>

  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background: #f5f7fb;
      padding: 40px;
    }

    .heading {
      text-align: center;
    }

    /* FORM */

    .form-box {
      background: white;
      padding: 25px;
      border-radius: 10px;
      max-width: 600px;
      margin: auto;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    .form-box h2 {
      margin-bottom: 20px;
    }

    .form-box input,
    .form-box textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ddd;
      border-radius: 6px;
    }

    .form-box button {
      background: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }

    /* POSTS */

    .posts {
      margin-top: 40px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
      max-width: 1200px;
      margin-left: auto;
      margin-right: auto;
    }

    .post-card {
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    }

    .post-title {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .post-content {
      font-size: 14px;
      color: #444;
      margin-bottom: 15px;
    }

    .post-date {
      font-size: 12px;
      color: #888;
    }
  </style>
</head>


<body>

  <!-- POST FORM -->

  <div class="total_posts">

    <h2 class="heading">
      Total posts: 
      <?php

      $post_select = "select count(post_id) as total_posts from users order by post_id desc";
      $post_data = mysqli_query($sql_conn, $post_select);
      $post_fetch = mysqli_fetch_array($post_data);

      echo $post_fetch["total_posts"]

      ?>
    </h2>
  </div>

  <div class="form-box">

    <h2>Create Post</h2>

    <form method="post">

      <input type="text" placeholder="Post Title" name="post_title">

      <textarea type="text" rows="4" placeholder="Post Content" name="post_content"></textarea>

      <button name="add_post">Add Post</button>

    </form>

  </div>


  <!-- POSTS -->

  <div class="posts">

    <?php 
      $post_select = "select * from users order by post_id desc";
      $post_connect = mysqli_query($sql_conn, $post_select);
      while($post_fetch = mysqli_fetch_array($post_connect)) {
    ?>

    <div class="post-card">

      <div class="post-title">
        <?php echo $post_fetch["post_title"]; ?>
      </div>

      <div class="post-content">
        <?php echo $post_fetch["post_content"]; ?>
      </div>

      <div class="post-date">
        <?php echo $post_fetch["post_date"]; ?>
      </div>

    </div>
  <?php
      }
  ?>

  </div>

</body>

</html>