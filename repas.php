<?php
/**
 * Created by JetBrains PhpStorm.
 * User: administrateur
 * Date: 13-09-13
 * Time: 15:40
 * To change this template use File | Settings | File Templates.
 */
//$bdd = new PDO('mysql:host=localhost;dbname=repas', 'root', 'admin123');

$cnx = mysql_connect( "localhost", "root", "admin123" );
$db= mysql_select_db( "repas" );
$sql = "SELECT pays FROM Pays where idPays>1";
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
$i = 1;
echo '<form method="post" action="ajoutbdsql.php">';
echo " <select name='Pays'>";
echo '<option value="">Choisir pays</option>';
while ($data = mysql_fetch_array($req))
{
    $i = $i + 1;
    echo "<option value=$i>" .$data['pays']. "</option>";
}
echo "</select>";
mysql_free_result ($req);
mysql_close ();
?>

    <select name="Type">
        <option value="">Choisir type</option>
        <option value="1"> Entr&eacutee </option>
        <option value="2"> Repas principal </option>
        <option value="3"> Dessert </option>
    </select>

    <p>Repas : <input type="text" name="repas" /></p>
<Input type = 'Radio' Name ='vege' value= "1"
    >vegetarien

<Input type = 'Radio' Name ='vege' value= "0"
    >non vegetarien
    <p>Prix : <input type="text" name="prix" /></p>

<p><input type="submit" name="valider" value="OK"></p>
</form>


