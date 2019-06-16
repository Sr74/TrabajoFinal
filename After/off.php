<?php
session_start();
session_destroy();
header("Location:../Before/ventanas/portal.php");
?>