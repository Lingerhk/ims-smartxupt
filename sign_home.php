<?php

require_once "init.php";

//if(!isset($_SESSION['username']) || $_SESSION['username']!==true){
//    echo "<meta http-equiv=\"Refresh\" content=\"0;url=login.php\">";
//    exit();
//}

$smarty->display('sign_home.tpl');
?>
