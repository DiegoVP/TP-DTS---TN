<?php
session_start();

setCookie("username","",time()-1);
session_destroy();
header("Location:index.php");
