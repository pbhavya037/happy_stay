<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Stay - CONTACT US</title>
    <!-- linking our common-links file -->
    <?php require('inc/links.php'); ?>
    
</head>
<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US </h2>
        <div class="h-line bg-dark"> </div> 
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. In quia exercitationem aspernatur sequi facilis <br> reiciendis voluptatibus, commodi repellat quam iusto!
        </p>
    </div>

    <div class="container">
        <div class="row">
        <?php
        $q = "SELECT * FROM contact";
        $v = [];
        $ress = selectt($q,$v);
           if($ress){
              $address = $ress[0]['addres'];
              $map = $ress[0]['map'];
              $phn1 =  $ress[0]['phn1'];
              $phn2 =  $ress[0]['phn2'];
              $email =  $ress[0]['email'];
           }
        else{
            alert('error','Unable to load data.');
        }
        echo <<<qq
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                
                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4" src=$map height="320px " loading="lazy"></iframe>
                        
                        <h5>Address</h5>
                        <a href="https://goo.gl/maps/HkpKedSc9S9Kyf5T8" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                            <i class="bi bi-geo-alt-fill"></i> $address
                        </a>
                        
                        <h5 class="mt-4">Call us</h5>
                        <a href="tel: $phn1" class="d-inline-block mb-2 text-decoration-none text-dark"> <i class="bi bi-telephone-fill"></i> $phn1</a>
                        <br>
                        <a href="tel: +918963838178" class="d-inline-block text-decoration-none text-dark"> <i class="bi bi-telephone-fill"></i> +919599854196</a>
                        
                        <h5 class="mt-4">Email</h5>
                        <a href="mailto: iitgmohitsharma@gmail.com" target="_blank" class="d-inline-block text-decoration-none text-dark">
                            <i class="bi bi-envelope-fill"></i> $email
                        </a>
                        
                        <h5 class="mt-4">Follow us</h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-twitter me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5">
                        <i class="bi bi-instagram me-1"></i>
                    </a>
                    
                </div>
            </div>
        qq;
        ?>
            
            
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form method="POST">
                        <h5>Send a message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <input type="text" name="name" class="form-control shadow-none" required>
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Email</label>
                            <input type="text" name="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <input type="text" name="sub" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Message</label>
                            <textarea class="form-control shadow-none" name="msg" rows="5" style="resize:none;" required></textarea>
                        </div>
                        <input type="submit" name="sub_msg" class="btn text-white custom-bg mt-3" value="SEND">
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php
    if(isset($_POST['sub_msg'])){
        $msg = $_POST['msg'];
        $cus = $_SESSION['userID'];

        $k = date("Y-m-d") ." ". date("h-i-s");
        $query = "INSERT INTO `queries`(`q_datetime`, `message`, `cus_id`) VALUES (?,?,?)";
        $values = [$k,$msg,$cus];
        $ress = updatess($query,$values);
        if($ress == 0){
            alert('error','error ouccurred');
        }
    }
    
    ?>

    <!-- including footer.php file (for footer and bootstrap include link) -->
    <?php require('inc/footer.php'); ?>
    
</body>
</html>