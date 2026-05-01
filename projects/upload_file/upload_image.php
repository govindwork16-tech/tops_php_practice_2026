<?php

require_once 'functions.php';

if (isset($_POST['upload_image'])) {
  $img_name = $_FILES['image']['tmp_name'];
  $image = "images/" . $_FILES["image"]["name"];
  move_uploaded_file($img_name, $image);

  $file_upload = image_insert($image);

  if ($file_upload) {
    header('location: upload_image.php');
  } else {
    echo "<script>alertt('Something went wrong');</script>";
  }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Image Upload UI</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f6fa;
      padding: 40px;
    }

    .container {
      max-width: 800px;
      margin: auto;
      background: #fff;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    }

    /* Full width upload */
    .upload-box {
      margin-bottom: 20px;
    }

    .upload-box label {
      display: block;
      font-weight: bold;
      margin-bottom: 8px;
    }

    .upload-box input[type="file"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 8px;
      background: #fafafa;
    }

    /* 2 column preview area */
    .image_flex {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
    }

    .image {
      min-height: 220px;
      border-radius: 10px;
      overflow: hidden;
      border: 1px solid #ddd;
      background: #f9f9f9;
      padding: 20px;
    }

    .image img {
      max-width: 100%;
      max-height: 100%;
      object-fit: cover;
      display: block;
      margin: 0 auto;
      min-height: 200px;
      object-fit: cover;
    }

    .download-btn {
      width: 100%;
      display: block;
      margin: 20px 0px;
      text-align: center;
      padding: 12px;
      background: linear-gradient(135deg, #4CAF50, #2e7d32);
      color: #fff;
      font-size: 16px;
      font-weight: 600;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: all 0.3s ease;
      box-sizing: border-box;
      text-decoration: none;

    }

    .download-btn:hover {
      background: linear-gradient(135deg, #43a047, #1b5e20);
      transform: translateY(-2px);
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    }

    /* Optional second column placeholder */
    .placeholder {
      border: 2px dashed #ddd;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #aaa;
      font-size: 14px;
    }

    input[type="submit"] {
      width: 100%;
      margin-top: 20px;
      padding: 12px;
      background: linear-gradient(135deg, #4CAF50, #2e7d32);
      color: #fff;
      font-size: 16px;
      font-weight: 600;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    /* Hover */
    input[type="submit"]:hover {
      background: linear-gradient(135deg, #43a047, #1b5e20);
      transform: translateY(-2px);
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    }

    /* Click */
    input[type="submit"]:active {
      transform: scale(0.98);
    }

    /* Optional: disabled state */
    input[type="submit"]:disabled {
      background: #ccc;
      cursor: not-allowed;
    }

    .image {
      position: relative;
    }

    /* Mobile */
    @media(max-width: 600px) {
      .image_flex {
        grid-template-columns: 1fr;
      }
    }
  </style>

</head>

<body>

  <div class="container">
    <form method="post" enctype="multipart/form-data">

      <!-- Full width upload -->
      <div class="upload-box">
        <label>Upload Image</label>
        <input type="file" name="image" id="imageInput" required>
        <input type="submit" name="upload_image" class="btn">
      </div>

      <!-- 2 column section -->
      <div class="image_flex">

        <?php

        $image_view = display_image();

        foreach ($image_view as $value) {
        ?>
          <div class="image">
            <img id="preview" src="<?php echo $value['photo']; ?>" alt="Preview">
            <a href="<?php echo $value['photo']; ?>" download class="download-btn">
              Download
            </a>
          </div>
        <?php
        }

        ?>

      </div>

    </form>
  </div>

</body>

</html>