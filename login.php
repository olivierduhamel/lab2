<?php
/**
 * Created by JetBrains PhpStorm.
 * User: administrateur
 * Date: 13-09-06
 * Time: 14:08
 * To change this template use File | Settings | File Templates.
 */echo "login:";
echo "password:";?>

<form method="post" action="login.php">

    <p>login : <input type="text" name="login" /></p>
    <p>password : <input type="text" name="password" /></p>


      <Input type = 'Radio' Name ='gender' value= 'male'
            <?PHP print $male_status; ?>
            >Male

      <Input type = 'Radio' Name ='gender' value= 'female'
            <?PHP print $female_status; ?>
            >Female

     <P>
    <p><input type="submit" name="valider" value="OK"></p>
    </form>
<?php
    if(isset($_POST['valider']))
    {
        if(isset($_POST['login']) && $_POST['login'] === "Olivier")
        {
            $expire = 365*24*3600;
            setcookie("login","$_POST['login']",time()+$expire);
            header("Location: secret.php");
            //setcookie("cookie[login]", "login");
            //setcookie("cookie[gender]", "gender");
            //setcookie("cookie[password]", "password");
        }
    }
?>