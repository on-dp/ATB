<?php
setcookie('m1', time(), time()-3600*60, "/ATB/index.php");
setcookie('m2', time(), time()-3600*60, "/ATB/index.php");
setcookie('m3', time(), time()-3600*60, "/ATB/index.php");
setcookie('m4', time(), time()-3600*60, "/ATB/index.php");
setcookie('m5', time(), time()-3600*60, "/ATB/index.php");
setcookie('m6', time(), time()-3600*60, "/ATB/index.php");
setcookie('m7', time(), time()+3600*60, "/ATB/index.php");
setcookie('m8', time(), time()-3600*60, "/ATB/index.php");
setcookie('m9', time(), time()-3600*60, "/ATB/index.php");
header ('Location: /ATB/index.php', true, 303 );
?>