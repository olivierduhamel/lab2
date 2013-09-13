<?php
/**
 * Created by JetBrains PhpStorm.
 * User: administrateur
 * Date: 13-09-06
 * Time: 14:08
 * To change this template use File | Settings | File Templates.
 */
include("header.php");
?>

<form method="post" action="login.php">

    <p>Login : <input type="text" name="login" /></p>
    <p>Password : <input type="password" name="password" /></p>


      <Input type = 'Radio' Name ='gender' value= 'male'
            <?PHP print $male_status; ?>
            >Male

      <Input type = 'Radio' Name ='gender' value= 'female'
            <?PHP print $female_status; ?>
            >Female
    <br/>

    <p><input type="submit" name="valider" value="OK"></p>
</form>
<?php
    if(isset($_POST['valider']))
    {
        if(isset($_POST['login']) && $_POST['login'] === "Olivier")
        {
            $expire = 365*24*3600;
            setcookie("login",$_POST['login'],time()+$expire);
            setcookie("gender", $_POST['gender'],time()+$expire);
            setcookie("password", $_POST['password'],time()+$expire);
            session_start();
            $_SESSION["login"] = $_POST['login'];
            header("Location: secret.php");
        }
    }
?>