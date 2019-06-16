<?php
session_start();
session_destroy();

header("Location:../ventanas/portal.php");
?>