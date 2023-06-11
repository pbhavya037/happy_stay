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

    <?php
    $g = $_SESSION['book_room_id'];
    $q = "SELECT * FROM room_type where room_id = ?";
    $v = [$g];
    $ress = selectt($q,$v); 
    $ii = $ress[0]['room_id'];
    $nm = $ress[0]['name'];
    $pr = $ress[0]['price'];
    $cp = $ress[0]['capacity'];
    $ds = $ress[0]['description'];

    $_SESSION['cp'] = $cp;
    $_SESSION['b_price'] = $pr;

    $qq = "SELECT f.name FROM features as f WHERE f.fr_id IN (SELECT rt.fr_id FROM rt_feature as rt WHERE rt.room_id=?)";
    $vv = [$ii];
    $res = selectt($qq, $vv);

    $pp = "SELECT count(room_no) FROM `room` WHERE room_id = ? AND availibility = 1";
    $uu = [$ii];
    $pes = selectt($pp, $uu);
    $av = $pes[0]['count(room_no)'];

    echo <<<qq
    
        <div class="my-5 px-4">
            <h2 class="fw-bold h-font ">$nm</h2>
        </div>
        
        <div class="container d-flex justify-content-between">
            
            <div class=" col-5 ">
                <img src="images/rooms/1.jpg" class="img-fluid rounded">
            </div>
            
            <div class="col-5">
                <div>
                    <h5 class="mb-3">&#8377 $pr per night</h5>
                    <div class=" mb-3">
                    <h6 class="mb-1">Features & Facilities</h6>
    qq;
    
    foreach($res as $r){
        $temp = $r['name'];
        echo <<<cc
        <span class="badge rounded-pill bg-light text-dark text-wrap">
        $temp
        </span>
        cc;
    }

    echo <<<qq
                </div>
            </div>
                <div class="mb-3">
                    <h6 class="mb-1">Guests</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        $cp persons
                    </span>
                </div>
                <div>
                    <h6 class="mb-1">Availability</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        $av rooms are available
                    </span>
                </div>
                
            </div>
        </div>
    qq;
    ?>
    
    <div class="container mt-3">
        <h5 class="mt-4">Booking Details</h5>
        <form method="POST">
            <div class="d-flex justify-content-between mt-2">
                
                <div>
                    <label class="form-label" style="font-weight:500;">Name *</label>
                    <input type="text" name="name" id="name" class="form-control shadow-none" required>
                </div>
                <div>
                    <label class="form-label" style="font-weight:500;">Mobile no. *</label>
                    <input type="tel" name="phone" id="phone" class="form-control shadow-none" required>
                </div>
                <div>
                <label class="form-label" style="font-weight:500;">Aadhar no. *</label>
                    <input type="number" name="aadr" id="aadr" class="form-control shadow-none" required>
                </div>
            </div>
            <div class="mt-2">
                <label class="form-label" style="font-weight:500;">Address *</label>
                <textarea name="add" class="form-control shadow-none" name="add" id="add" cols="30" rows="6" required></textarea>
            </div>
            <div class="d-flex justify-content-between mt-2">
                <div class="col-3 mb-3">
                    <label class="form-label" style="font-weight:500;">Check-in *</label>
                    <input type="date" name="check_in" class="form-control shadow-none" required>
                </div>
                <div class="col-3 mb-3">
                    <label class="form-label" style="font-weight:500;">Check-out *</label>
                    <input type="date" name="check_out" class="form-control shadow-none" required>
                </div>
                <div class="col-3 mb-3">
                <label class="form-label" style="font-weight:500;">Guests *</label>
                    <select class="form-select shadow-none" name="guest_no">
                        <?php
                            $c = $_SESSION['cp'];
                        for($j = 1; $j<=$c ; $j++ ){
                            echo <<<ppp
                                <option value=$j>$j</option>
                            ppp;
                        }
                        ?>
                    </select>
                </div>
            </div>  
            <input type="submit" name="book" class="btn text-white shadow-none custom-bg" value="Pay Now">
        </form>
    </div>

    <?php
    if(isset($_POST['book'])){
        $_SESSION['b_name'] = $_POST['name'];
        $_SESSION['b_phone'] = $_POST['phone'];
        $_SESSION['b_aadr'] = $_POST['aadr'];
        $_SESSION['b_add'] = $_POST['add'];
        $_SESSION['b_check_in'] = $_POST['check_in'];
        $_SESSION['b_check_out'] = $_POST['check_out'];
        $_SESSION['b_guest_no'] = $_POST['guest_no'];
        $url = "pay_meth.php";
        redirect($url);
    }
    ?>


    <!-- including footer.php file (for footer and bootstrap include link) -->
    <?php require('inc/footer.php'); ?>

</body>

</html>
