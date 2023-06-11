<?php
require('db_config.php');
require('essential.php');
adminlogin();
?>
<!doctype html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin_Panel/Dashboard</title>
   <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
   <style>
      #example::-webkit-scrollbar {
         display: none;
      }
      #example {
         -ms-overflow-style: none;
         scrollbar-width: none;
      }
   </style>
</head>

<body class="h-screen">
<form action="room_img_1.php" enctype="multipart/form-data" method="POST">
    <input type="file" name="my_img">
    <button type="submit" name="img_submit">Submit</button>
</form>

<script src="https://kit.fontawesome.com/0f12186728.js" crossorigin="anonymous"></script>
</body>

</html>



