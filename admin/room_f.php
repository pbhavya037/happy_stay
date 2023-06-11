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

    <!-- Edit modal -->
    <div id="resolve-modal" tabindex="-1" aria-hidden="true" class=" overflow-y-auto overflow-x-hidden fixed flex items-center justify-center z-50 w-full bg-black bg-opacity-75 md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-md h-full  md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit Facilites :</h3>
                    <div>
                        <p>Selected Facilities</p>
                        <?php
                        $g = $_POST['re'];
                        // $g = 1;
                        $q = "SELECT f.name,f.fr_id FROM features as f WHERE f.fr_id IN (SELECT rt.fr_id FROM rt_feature as rt WHERE rt.room_id=?)";
                        $v = [$g];
                        $ress = selectt($q, $v);
                        $k = count($ress);
                        // print_r($ress);
                        for ($i = 1; $i <= $k; $i++) {
                            $ii = $ress[$i - 1]['fr_id'];
                            $nm = $ress[$i - 1]['name'];
                            echo <<<pp
                                <p>$nm</p>
                            pp;
                        }
                        ?>
                    </div>

                    <hr>
                    <form class="space-y-6" method="POST">
                        <!-- <div> -->
                        <p>More Facilities</p>
                        <?php
                        $g = $_POST['re'];
                        // $g = 1;
                        $q = "SELECT f.name,f.fr_id FROM features as f WHERE f.fr_id NOT IN (SELECT rt.fr_id FROM rt_feature as rt WHERE rt.room_id=?)";
                        $v = [$g];
                        $ress = selectt($q, $v);
                        $k = count($ress);
                        echo "<div class='flex gap-2'>";
                        for ($i = 1; $i <= $k; $i++) {
                            $ii = $ress[$i - 1]['fr_id'];
                            $nm = $ress[$i - 1]['name'];
                            echo <<<pp
                            <div class="form-check form-check-inline">
                                <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" name="fac[]" id="id2" value=$ii>
                                <label class="form-check-label inline-block text-gray-800" for="fac[]">$nm</label>
                            </div>
                            pp;
                        }
                        echo "</div>";
                        echo <<<qq
                           <input type="hidden" name="kk" value=$g>
                           qq;
                        ?>
                        <!-- </div> -->
                        <input type="submit" name="fac_chng" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" value="Save Changes">

                    </form>
                </div>
            </div>
        </div>
    </div>



    <?php
    if (isset($_POST['fac_chng'])) {
        $b = $_POST['fac'];
        $gg = $_REQUEST['kk'];

        foreach( $b as $i){
            $q = "INSERT INTO rt_feature(`fr_id`, `room_id`) VALUES (?,?)";
            $v = [$i,$gg];
            $ress = selectt($q, $v);
            if($ress==0){
                alert('error',"Sql error");
            }
            else{
                alert('success','Change Successfull');
                redirect('room.php');
            }
        }

    }
    ?>

    <script src="https://kit.fontawesome.com/0f12186728.js" crossorigin="anonymous"></script>
</body>

</html>