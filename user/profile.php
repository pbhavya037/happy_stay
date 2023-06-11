<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Stay - Details</title>
    <!-- linking our common-links file -->
    <?php require('inc/links.php'); ?>
    
</head>
<body class="bg-light">

    <?php require('inc/header.php'); ?>
    

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Profile</h2>
        <div class="h-line bg-dark"></div> 
        <p class="text-center mt-3">
        </p>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 px-4">
                <div class="bg-white rounded shadow p-4">
                    <div>
                        <h4>Details</h4>
                        <?php
                        $k = $_SESSION['userID'];
                        $query = "SELECT * FROM custumer WHERE cus_id = ?";
                        $values = [$k];
                        $res = selectt($query,$values);
                        // print_r($res);
                        $nm = $res[0]["name"];
                        $ph = $res[0]["phone"];
                        $ad = $res[0]["address"];
                        $em = $res[0]["email"];
                        $dob = $res[0]["dob"];
                        $_SESSION['p_pass'] = $res[0]["Pass"];
                        // print_r($_SESSION['p_pass']);
                        echo <<<pp
                            <table class="table " >
                            <tr>
                                <td class="mt-3">
                                    <p class="form-label" style="font-weight: 500;">Name :</p>
                                </td>
                                <td> $nm</td>
                            </tr>
                            <tr>
                                <td class="mt-3">
                                    <p class="form-label" style="font-weight: 500;">Phone No : </p>
                                </td>
                                <td> $ph</td>
                            </tr>

                            <tr>
                                <td class="mt-3">
                                    <p class="form-label" style="font-weight: 500;">Email : </p>
                                </td>
                                <td> $em</td>
                            </tr>
                            <tr>
                                <td class="mt-3">
                                    <p class="form-label" style="font-weight: 500;">Address : </p>
                                </td>
                                <td> $ad</td>
                            </tr>
                            <tr>
                                <td class="mt-3">
                                    <p class="form-label" style="font-weight: 500;">Date of Birth : </p>
                                </td>
                                <td  class="mt-3">
                                    <p>$dob</p>
                                </td>
                            </tr>
                            </table>
                        pp;
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 mb-5 px-4 mt-5">

                <div class="bg-white rounded shadow p-4">
                    <h4>Change Password</h4>
                <form >
                    
                    <div class="mt-3">
                        <label class="form-label" style="font-weight: 500;">Passoword: </label>
                        <input type="password" name="pass" class="form-control shadow-none" required>
                    </div>
                    
                    <div class="mt-3">
                        <label class="form-label" style="font-weight: 500;">New Passoword: </label>
                        <input type="password" name="n_pass" class="form-control shadow-none" required>
                    </div>
                    
                    <div class="mt-3">
                        <label class="form-label" style="font-weight: 500;">Confirm Passoword: </label>
                        <input type="password" name="c_pass" class="form-control shadow-none" required>
                    </div>
                    
                    <div class="fw-bold">
                        <button type="submit" name="chng_pass" class="btn text-black custom-bg mt-3">Change Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php

    if(isset($_REQUEST['chng_pass'])){
        if($_REQUEST['c_pass'] == $_REQUEST['n_pass']){
            if($_REQUEST['pass'] == $_SESSION['p_pass']){
                $k = $_SESSION['userID'];
                $query = "UPDATE custumer SET Pass = ? WHERE cus_id = ?";
                $values = [$_REQUEST['c_pass'],$k];
                $res = updatess($query,$values);
                if($res){
                    alert("Success","password changed");
                }
                else{
                    alert("Error","backend error");
                }
            }
            else{
                alert("Error","Incorrect password");
            }
        }
        else{
            alert("Error","Password did not matched");
        }
    }

    ?>

    <!-- including footer.php file (for footer and bootstrap include link) -->
    <?php require('inc/footer.php'); ?>
    
</body>
</html>
