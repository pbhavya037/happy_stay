<?php 
       require('db_config.php');
       require('essential.php');
       session_start();
       if((isset($_SESSION['userLogin']) && $_SESSION['userLogin']==true)){
        redirect('user_panel.php');
       }
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<body>
<div class="min-h-screen w-screen p-2">
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class=" overflow-y-auto overflow-x-hidden fixed flex items-center bg-black justify-center z-50 w-full  bg-opacity-75 md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full  md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="py-6 px-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Login as a User</h3>
                <form class="space-y-6" action="#" method="POST">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                        <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your password</label>
                        <input type="password" name="pass" id="pass" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                   
                    <button type="submit" name="login" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
                </form>
                    <div class="text-sm mt-4 font-medium text-gray-500 dark:text-gray-300">
                        Not registered? <button class="text-blue-700 hover:underline dark:text-blue-500" onclick="document.getElementById('authentication-modal').classList.add('hidden'); document.getElementById('regist-modal').classList.remove('hidden')">Create Account</button>
                    </div>
            </div>
        </div>
    </div>
</div>


<!-- register page -->
<div id="regist-modal" tabindex="-1" aria-hidden="true" class=" hidden overflow-y-auto overflow-x-hidden fixed flex items-center justify-center z-50 bg-black bg-opacity-75 md:inset-0   md:h-full" id="example" >
    <div class="relative p-4 w-full max-w-md h-full md:h-auto" >
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow shadow-inner dark:bg-gray-700">
            
            <div class="py-6 px-6 lg:px-8 overflow-scroll" id="example" style="height: 700px;">
                <div class="flex justify-between">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Register</h3>
                    <button type="button" class=" text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" onclick="document.getElementById('regist-modal').classList.add('hidden'); document.getElementById('authentication-modal').classList.remove('hidden')"  >
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only" >Close modal</span>
                    </button>
            </div>
                <form class="space-y-6 " action="#" method="POST">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-med3ium text-gray-900 dark:text-gray-300">Your Name</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Name" >
                    </div>
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your Phone no.</label>
                        <input type="tel" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="9876543210" >
                    </div>
                    <div>
                    <label for="DOB" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">DOB</label>
                        <input type="date" name="DOB" id="DOB" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                    </div>
                    <div>
                        <label for="add" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Address</label>
                        <textarea name="add" id="add" cols="30" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  rows="5"></textarea>
                    </div>
                    <div>
                        <label for="pass" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
                        <input type="password" name="pass" id="pass" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <div>
                        <label for="cpass" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Confirm password</label>
                        <input type="password" name="cpass" id="cpass" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <button type="submit" name="reg_user" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register</button>  
                </form>
            </div>
        </div>
    </div>
</div>


<?php
if(isset($_POST['reg_user'])){
    $frm_data = filteration($_POST);
    if($frm_data['cpass']==$frm_data['pass']){

        $query = "INSERT INTO `custumer`(`name`, `email`, `phone`, `address`, `dob`, `verified`, `Pass`) VALUES (?,?,?,?,?,?,?)";
        $values = [$frm_data['name'],$frm_data['email'],$frm_data['phone'],$frm_data['add'],$frm_data['DOB'],1 ,$frm_data['pass']];
        $ress = updatess($query,$values);
        // echo $frm_data['name'],$frm_data['email'],$frm_data['phone'],$frm_data['add'],$frm_data['DOB'],$frm_data['pass'];
        if($ress){
                     alert('success','Unable to reset contact data');
                     echo "<meta http-equiv='refresh' content='0'>";
            }
            else{
                    alert('error','Unable to reset contact data');
        }
    }
    else{
        alert('error','Passord did not match');   
    }
}

if (isset($_POST['login'])) {
    $frm_data = filteration($_POST);
    
    $query = "SELECT * FROM custumer WHERE email= ? AND Pass= ?";
    $values = [$frm_data['email'],$frm_data['pass']];
    $res = selectt($query,$values);
        if(count($res)==1){
                $_SESSION['userLogin'] = true;
                $_SESSION['userID'] = $res[0]['cus_id'];
                alert('success','Login successfull');
                redirect('user_panel.php');
            }
            else{
                alert('error','Wrong username or password');
        }
}

?>


<script src="https://kit.fontawesome.com/0f12186728.js" crossorigin="anonymous"></script>

</body>
</html>