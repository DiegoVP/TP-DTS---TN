<?php
setCookie("username","",time()-1);
session_destroy();
header("Location:register.php");
