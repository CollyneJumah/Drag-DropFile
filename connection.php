<?php
/**
 * Created by PhpStorm.
 * User: CollyneJumah
 * Date: 26-Mar-18
 * Time: 15:31
 */

define("DBHOST","localhost" );
define("USERNAME","root" );
define("PASSWORD","");
define("DBNAME","name of your database" );
$conn=mysqli_connect(DBHOST,USERNAME,PASSWORD,DBNAME);
if($conn===false){
    die("Error!"."No Connection!".mysqli_connect_error());
}
?>