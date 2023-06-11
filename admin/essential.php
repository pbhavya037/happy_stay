<?php

function adminlogin(){

    session_start();
    if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
        echo"<script>
        window.location.href='ad_login.php';
        </script>";
    }
    session_regenerate_id(true);
}

function redirect($url){

    echo"<script>
    window.location.href='$url';
    </script>";

}


function alert($type,$msg){

    $bs_class= ($type == "success")? "green":"orange";

    echo <<<alert
        <div class="bg-$bs_class-100 border-l-4 border-$bs_class-500 text-$bs_class-700 p-4" role="alert">
        <p>$msg</p>
        </div>
        alert;
}
?>