<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Stay - FACILITIES</title>
    <!-- linking our common-links file -->
    <?php require('inc/links.php'); ?>

    <style>
        .pop:hover{
            border-top-color: var(--teal) !important;
            /* this property is given important becoz inline css has more preference than documentary css */
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>
    
</head>
<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>

        <div class="h-line bg-dark"> </div> 
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. In quia exercitationem aspernatur sequi facilis <br> reiciendis voluptatibus, commodi repellat quam iusto!
        </p>
    </div>

    <div class="container">
        <div class="row">
            <?php
            $qq = "SELECT * FROM features";
            $vv = [];
            $res = selectt($qq, $vv);
            $k = count($res);


            for($i = 1; $i <= $k; $i++){
                    $ii = $res[$i-1]['fr_id'];
                    $nm = $res[$i-1]['name'];
                    $ds = $res[$i-1]['description'];
                
                echo <<<pp
                 <div class="col-lg-4 col-md-6 mb-5 px-4 ">
                 <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                 <div class="d-flex align-items-center mb-2">
                 <h5 class="m-0 ms-3">$nm</h5>
                 </div>
                 <p>
                 $ds
                 </p>
                 </div>
                 </div>
                 pp;
            }
             ?>
            
            
            
        </div>
    </div>


    <!-- including footer.php file (for footer and bootstrap include link) -->
    <?php require('inc/footer.php'); ?>
    
</body>
</html>