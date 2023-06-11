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
                     <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Query resolved by :</h3>
                     <form class="space-y-6" method="POST">
                        <!-- <div> -->
                           <?php
                           $q = "SELECT * FROM receptionist";
                           $v = [];
                           $ress = selectt($q, $v);
                           $k = count($ress);
                           $g = $_POST['gg'];
                           
                           for ($i = 1; $i <= $k; $i++) {
                              $ii = $ress[$i - 1]['staff_id'];
                              $nm = $ress[$i - 1]['staff_name'];
                              echo <<<pp
                                    <div class="flex items-center mb-4">
                                       <input type="radio" value=$ii name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                       <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">$nm</label>
                                    </div>
                                 pp;
                           }
                           echo <<<qq
                           <input type="hidden" name="kk" value=$g>
                           qq;
                           ?>
                        <!-- </div> -->
                        <input type="submit" name="reslove_chng" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" value="Save Changes">

                     </form>
                  </div>
               </div>
            </div>
         </div>
<?php
if (isset($_POST['reslove_chng'])) {
   $g = $_REQUEST['kk'];
   $frm_data = filteration($_POST);
   $query = "INSERT INTO resolve( `staff_id`, `query_no`) VALUES (?,?)";
   $values = [$frm_data['default-radio'],$g];
   $ress = updatess($query,$values);
   
   if($ress){
      alert('success','Change Successfull');
      redirect('user_query.php');
   }
   else{
      alert('error','Unable to reset contact data');
   }
}
?>

      <script src="https://kit.fontawesome.com/0f12186728.js" crossorigin="anonymous"></script>
</body>

</html>