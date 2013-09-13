<?php
/**
 * Created by JetBrains PhpStorm.
 * User: administrateur
 * Date: 13-09-10
 * Time: 09:52
 * To change this template use File | Settings | File Templates.
 */
include("header.php");
session_start();
$_SESSION["login"]="";
session_destroy();
echo "Vous etez deconnecter<br/><br/>";
echo "<a href=login.php>Revenir au login</a>";
