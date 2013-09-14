<?php
/**
 * Created by JetBrains PhpStorm.
 * User: administrateur
 * Date: 13-09-13
 * Time: 18:34
 * To change this template use File | Settings | File Templates.
 */
if(isset($_POST['valider']))
{
    echo "Pays : ".$_POST['Pays']."<br>";
    echo "Type : ".$_POST['Type']."<br>";
    echo "Repas : ".$_POST['repas']."<br>";
    echo "VEGE : ".$_REQUEST['vege'];
    echo $_POST['prix'];
    if(isset($_POST['Pays']) && $_POST['Pays'] !== 0)
    {
        echo "Pays";
        if(isset($_POST['Type']) && $_POST['Type'] !== 0)
        {
            echo "Type";
            if(isset($_POST['repas']) && $_POST['repas'] != "")
            {
                echo "repas";
                if(isset($_POST['vege']) && $_POST['vege'] != "")
                {
                    echo "vege";
                    if(isset($_POST['prix']) && $_POST['prix'] != "")
                    {
                        echo "prix";
                        $cnx = mysql_connect( "localhost", "root", "admin123" );
                        $db= mysql_select_db( "repas" );


                        // lancement de la requête
                        $sql = "INSERT INTO Repas(idPays, idType, repas, vege, prix) VALUES (".$_POST['Pays'].",".$_POST['Type'].",\"".$_POST['repas']."\",\"".$_POST['vege']."\",".$_POST['prix'].")";

                        // on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
                        $req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

                        // on libère l'espace mémoire alloué pour cette interrogation de la base
                        mysql_free_result ($req);
                        mysql_close ();
                    }
                    header("Location: repas.php");

                }
                header("Location: repas.php");
            }
            header("Location: repas.php");
        }
        header("Location: repas.php");
    }
    header("Location: repas.php");
}
header("Location: repas.php");