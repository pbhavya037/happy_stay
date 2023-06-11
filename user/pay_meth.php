<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Stay - ROOMS</title>
    <!-- linking our common-links file -->
    <?php require('inc/links.php'); ?>

</head>

<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Payment </h2>
        <div class="h-line bg-dark"> </div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. In quia exercitationem aspernatur sequi facilis <br> reiciendis voluptatibus, commodi repellat quam iusto!
        </p>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 px-4">
                <div class="bg-white rounded shadow p-4">
                    <div>
                        <h4>Details:</h4>
                        <div class="mt-3 d-flex">
                            <p class="form-label" style="font-weight: 500;">Full Name: </p>
                            <p><?php echo $_SESSION['b_name'];?></p>
                        </div>
                        <div class="mt-3"> 
                            <p class="form-label" style="font-weight: 500;">Phone No</p>
                            <p><?php echo $_SESSION['b_phone'];?></p>
                        </div>
                        <div class="mt-3">
                            <p class="form-label" style="font-weight: 500;">Aadhaar Card</p>
                            <p><?php echo $_SESSION['b_aadr'];?></p>
                        </div>
                        <div class="mt-3">
                            <p class="form-label" style="font-weight: 500;">No. of People</p>
                            <p><?php echo $_SESSION['b_guest_no'];?></p>
                        </div>
                        <div class="mt-3">
                            <p class="form-label" style="font-weight: 500;">Check-In</p>
                            <p><?php echo $_SESSION['b_check_in'];?></p>
                        </div>
                        <div class="mt-3">
                            <p class="form-label" style="font-weight: 500;">Check-Out</p>
                            <p><?php echo $_SESSION['b_check_out'];?></p>
                        </div>
                        <div>
                            <?php
                                $pr = $_SESSION['b_price'];
                                $d = date_create($_SESSION['b_check_in']);
                                $c = date_create($_SESSION['b_check_out']);
                                $df = date_diff($d,$c);
                                $dff = $df->days;
                                $gn = $_SESSION['b_guest_no'];
                                $amt = $dff*( $pr);
                                $_SESSION['b_amt'] = $amt;

                                echo <<<pp
                                    <p type="submit" class=" text-black mt-3">Total Payment: $amt</p>
                                pp;
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- INSERT INTO `booking`(`book_id`, `check_in`, `check_out`, `aadhaar`, `address`, `guest`, `paid`, `arrived`, `room_no`, `amount`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]') -->

            <div class="col-lg-12 col-md-6 mb-5 px-4 mt-5">

                <div class="bg-white rounded shadow p-4">
                    <h4>Select Payment Method:</h4>
                    <form method="POST">
                        <div class="fw-bold">
                            <input type="radio" value="1" name="pay_m" disabled>
                            <label for="pay_m"> Online Methods </label>
                            <input type="radio" value="0" class="ml=4" name="pay_m" >
                            <label for="pay_m"> Pay on Arrival</label><br>
                        </div>
                        <input type="submit" name="book_p" class="btn text-black custom-bg mt-3" value="Book">
                    </form>
                </div>
            </div>

        </div>
    </div>

    <?php 
    $ii = $_SESSION['book_room_id'];
    $pp = "SELECT room_no FROM `room` WHERE room_id = ? AND availibility = 1";
    $uu = [$ii];
    $pes = selectt($pp, $uu);

    // print_r($pes[0]['room_no']);

    if(isset($_POST['book_p'])){
    $query = "INSERT INTO `booking`(`name`,`check_in`, `check_out`, `aadhaar`, `address`, `guest`, `arrived`, `room_no`, `amount`,`cus_id`) VALUES (?,?,?,?,?,?,?,?,?,?)";
    $values = [$_SESSION['b_name'],$_SESSION['b_check_in'],$_SESSION['b_check_out'],$_SESSION['b_aadr'],$_SESSION['b_add'],$_SESSION['b_guest_no'],0,$pes[0]['room_no'],$_SESSION['b_amt'],$_SESSION['userID']];
    $ress = updatess($query,$values);
    if($ress == 0){
        alert('error',"error occured");
    }

    $q ="UPDATE `room` SET `availibility`= 0 WHERE `room_no`=?";
    $v = [$pes[0]['room_no']];
    $rec = updatess($q,$v);
    if($rec == 0){
        alert('error',"rec -- error occured");
    }

    redirect('rooms.php');
    }
    ?>


    <!-- including footer.php file (for footer and bootstrap include link) -->
    <?php require('inc/footer.php'); ?>

</body>

</html>