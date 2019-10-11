<?php
setCookie("username","",time()-1);
//session_start();
//$_SESSION["username"] = "";
session_destroy();
header("Location:register.php");
