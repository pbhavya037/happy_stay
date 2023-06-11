<?php
require('essential.php');
session_start();
session_destroy();
redirect('ad_login.php');
?>