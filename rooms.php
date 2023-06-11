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
        <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
        <div class="h-line bg-dark"> </div>

    </div>


            <div class="container">
                <div class="row">
                    <div class="col-md-12 px-4">
                        <?php
                        $q = "SELECT * FROM room_type";
                        $v = [];
                        $ress = selectt($q, $v);
                        $k = count($ress);
                        for ($i = 1; $i <= $k; $i++) {
                            $ii = $ress[$i - 1]['room_id'];
                            $nm = $ress[$i - 1]['name'];
                            $pr = $ress[$i - 1]['price'];
                            $cp = $ress[$i - 1]['capacity'];
                            $ds = $ress[$i - 1]['description'];

                            $qq = "SELECT f.name FROM features as f WHERE f.fr_id IN (SELECT rt.fr_id FROM rt_feature as rt WHERE rt.room_id=?)";
                            $vv = [$ii];
                            $res = selectt($qq, $vv);

                            echo <<<pp
                    <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                <img src="images/rooms/1.jpg" class="img-fluid rounded">
                            </div>
                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5 class="mb-3">$nm</h5>

                                <div class="features mb-3">
                                    <h6 class="mb-1">Features & Facilities</h6>
                    pp;

                            foreach ($res as $r) {
                                $temp = $r['name'];
                                echo <<<cc
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                         $temp
                         </span>
                    cc;
                            }
                            echo <<<ww
                                </div>

                                <div class="guests">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                                        $cp Persons
                                    </span>
                                </div>

                            </div>
                            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                                <h6 class="mb-4">₹ $pr per night</h6>
                                <form method="POST">
                                <input type="hidden" name="ga" value=$ii>
                                    <input type="submit" name="fun" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2"  value="Book Now" >
                                </form>
                            </div>
                        </div>
                        </div>
                    ww;
                        }
                        ?>
                        <!-- mark -->
                    </div>
                </div>
            </div>


            <!-- including footer.php file (for footer and bootstrap include link) -->
            <?php require('inc/footer.php'); ?>

</body>

</html>
