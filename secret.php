<?php
/**
 * Created by JetBrains PhpStorm.
 * User: administrateur
 * Date: 13-09-06
 * Time: 14:08
 * To change this template use File | Settings | File Templates.
 */
include("header.php");
session_start();
if(isset($_SESSION["login"]))
{
    if($_COOKIE["gender"] === "male")
    {
        $gender = "Mr. ";
    }
    else
    {
        if($_COOKIE["gender"] === "female")
        {
            $gender = "Mme ";
        }
        else
        {
            $gender = "";
        }
    }
    echo "Bienvenue ".$gender.$_COOKIE["login"]."<br/>";
    echo "<img src='Destiny_logo.jpg'>";
    echo "<img src='glyphicons-halfings.png'>";
    echo "<br/><a href='deconnexion.php'>Se Deconnecter<a>";


}
else
{
    echo "<p style='color:#FF0000'>Impossible d&acuteacc&eacuteder &agrave cette page, vous devez &ecirctre logu&eacute</p>";
    header('Refresh: 5; url=login.php');
}