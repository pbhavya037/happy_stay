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
<?php
if(isset($_REQUEST['img_submit']) && isset($_FILES['my_img'])){
   print_r($_FILES['my_img']);
   $img_name = $_FILES['my_img']['name'];
	$img_size = $_FILES['my_img']['size'];
	$tmp_name = $_FILES['my_img']['tmp_name'];
	$error = $_FILES['my_img']['error'];
   // echo $tmp_name;
if($error == 0){
   if($img_size>12500000){
      $em = "size is too large !";
      alert('error',$em);
      // header("Location :room_img_1.php?error=$em"); 
  }
  else{

     $img_ex = pathinfo($img_name,PATHINFO_EXTENSION);
     $img_ex_lc = strtolower($img_ex);
     $allowed_exs = array("jpg","jpeg","png");
     if(in_array($img_ex_lc,$allowed_exs)){
        $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
        $img_upload_path = '/var/www/html/proj/admin/upload/'.$new_img_name;
        if(move_uploaded_file($tmp_name,$img_upload_path)){
           alert('success','Image Selected');
        }
        echo $img_upload_path;
        
      //   copy($source, $img_upload_path)
      //   alert('error',"hello");
         // $dir    = '/var/www/html/proj/admin/upload';
         // var/www/html/proj/Hotel-Booking-imag/images/rooms
         // echo "hello";
         //  include('connect1.php');
         // for linux:

         // for windows:
         //  $dir    = 'C:\Xampp\Htdocs\dbmsProject\uploadLogo';
          
         //  $files1 = scandir($dir);
      
         //  $x=count($files1)-1;
               
         //   $path ="upload/".$files1[$x];

         //   $shopId =  $_SESSION['NavSelSid'];

         //  $sql = "SELECT * FROM ShopLogo WHERE ShopId=$shopId";
         //  $result = mysqli_query($conn, $sql);
          
         //  if (mysqli_num_rows($result) > 0) {
         //    // output data of each row
         //         $sql = "UPDATE ShopLogo SET imagePath='$path' WHERE ShopId=$shopId"; 
         //         $res = mysqli_query($conn, $sql);
         //            // header("Location :mycart.php?"); 
         //         header("refresh:0; url= yourShop.php");
         //  } else {
         //        $sql = "INSERT INTO ShopLogo(ShopId,imagePath) VALUES('$shopId','$path')";
         //         mysqli_query($conn, $sql);
         //  }

      }
      else{
          $em = "you can't upload file this type";
         //   header("refresh:0; url= room.php");
           
      }
      // echo($img_ex);
  }
 

}
else{
    alert('error',"Not Selected");
}
}
?>



<script src="https://kit.fontawesome.com/0f12186728.js" crossorigin="anonymous"></script>
</body>

</html>




<!-- if(isset($_POST['submit'])){
     
     if(isset($_FILES['my_image'])){

    

  $img_name = $_FILES['my_image']['name'];
  $img_size = $_FILES['my_image']['size'];
  $tmp_name = $_FILES['my_image']['tmp_name'];
  $error = $_FILES['my_image']['error'];
  $size = $_FILES['my_image']['size'];
  

  if($error === 0){
      if($img_size>125000){
          $em = "size is too large !";
          header("Location :mycart.php?error=$em"); 

      }
      else{
          $img_ex = pathinfo($img_name,PATHINFO_EXTENSION);
          $img_ex_lc = strtolower($img_ex);
          $allowed_exs = array("jpg","jpeg","png");
         if(in_array($img_ex_lc,$allowed_exs)){
              $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
              $img_upload_path = '../uploadLogo/'.$new_img_name;
              move_uploaded_file($tmp_name,$img_upload_path);
             
              include('connect1.php');
              // for linux:
              // $dir    = '/var/www/html/dbmsProject/uploadLogo';

              // for windows:
              $dir    = 'C:\Xampp\Htdocs\dbmsProject\uploadLogo';
              
              $files1 = scandir($dir);
          
              $x=count($files1)-1;
                   
               $path ="uploadLogo/".$files1[$x];

               $shopId =  $_SESSION['NavSelSid'];
               
              $sql = "SELECT * FROM ShopLogo WHERE ShopId=$shopId";
              $result = mysqli_query($conn, $sql);
              
              if (mysqli_num_rows($result) > 0) {
                // output data of each row
                     $sql = "UPDATE ShopLogo SET imagePath='$path' WHERE ShopId=$shopId"; 
                     $res = mysqli_query($conn, $sql);
                        // header("Location :mycart.php?"); 
                     header("refresh:0; url= yourShop.php");
              } else {
                    $sql = "INSERT INTO ShopLogo(ShopId,imagePath) VALUES('$shopId','$path')";
                     mysqli_query($conn, $sql);
              }

          }
          else{
              $em = "you can't upload file this type";
               header("refresh:0; url= update_logo.php");
               
          }
          echo($img_ex);
      }


  }
  else{
     $em = "unknown error occurred !";
      header("refresh:0; url= update_logo.php");
  }
}
}  -->
