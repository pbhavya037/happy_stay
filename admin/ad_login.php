<?php 
    require('db_config.php');
    require('essential.php');

    session_start();
    if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
       redirect('dashboard.php');
    }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>

<div id="admin-authentication-modal" tabindex="-1" aria-hidden="true" class=" overflow-y-auto overflow-x-hidden fixed flex items-center justify-center bg-gray-500 w-full drop-shadow-2xl md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full  md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            
            <div class="py-6 px-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Login as an Admin</h3>
                <form class="space-y-6" method="POST">
                    <div>
                        <label for="admin_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                        <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                    </div>
                    <div>
                        <label for="pass" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your password</label>
                        <input type="password" name="pass" id="pass" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <button name="login" type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                        Not registered? <button class="text-blue-700 hover:underline dark:text-blue-500" >Create account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php

    if (isset($_POST['login'])) {
    $frm_data = filteration($_POST);

    $query = "SELECT * FROM hotel_owner WHERE o_username= ? AND o_pass= ?";
    $values = [$frm_data['email'],$frm_data['pass']];
    $res = selectt($query,$values);
        if(count($res)==1){
            $_SESSION['adminLogin'] = true;
            $_SESSION['adminID'] = $res['sr_no'];
            alert('success','Login successfull');
            redirect('dashboard.php');
        }
        else{
            alert('error','Wrong username or password');
        }
    }
    
?>

<script src="https://kit.fontawesome.com/0f12186728.js" crossorigin="anonymous"></script>
</body>
</html>