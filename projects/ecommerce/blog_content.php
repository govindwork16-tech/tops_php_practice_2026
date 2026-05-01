<?php 

require_once 'admin/functions.php';
require_once 'include/header.php';

if (isset($_GET['post_id'])) {
  $post_id = $_GET['post_id'];
  $fetch_post = fetch_post($post_id);
}

?>

<body>

  <!-- HERO -->
  <div class="page-hero">
    <div class="container">
      <h1><?php echo $fetch_post[0]['title'] ?></h1>
      <p>Published <?php echo $fetch_post[0]['date_and_time'] ?></p>
      <p style="color: #fff;">Category <b><?php echo $fetch_post[0]['post_category'] ?></b></p>
    </div>
  </div>

  <!-- CONTENT -->
  <section class="section">
    <div class="container">

      <div style="max-width:800px;margin:auto;">

        <!-- Description -->
        <div style="
          font-size:15px;
          color:var(--clr-mid);
          line-height:1.8;
        ">
          <p>
            <?php echo $fetch_post[0]['description'] ?>
          </p>
        </div>

      </div>

    </div>
  </section>

</body>
</html>