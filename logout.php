<?php
session_start();
if(@!($_SESSION['username']))
{
	header("location:../../Login_v1/index.php");
}
session_start();
session_unset();
session_destroy();
header("location:Login_v1/index.php");
?>