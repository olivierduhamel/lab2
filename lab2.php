<?php
/**
 * Created by JetBrains PhpStorm.
 * User: root
 * Date: 13-09-03
 * Time: 10:05
 * To change this template use File | Settings | File Templates.
 */

$file = fopen("pays.txt","r");

while(! feof($file))
{
    echo fgets($file);
    echo "<br />";

}

fclose($file);




if (strpos($_SERVER['HTTP_USER_AGENT'], "MSIE") !== FALSE)
    echo '<script>alert("Va installer Goggle Chrome!!");</script>';

?>
<img src="fail-at-failing.jpg"/>