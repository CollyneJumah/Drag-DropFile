<?php
/**
 * Created by PhpStorm.
 * User: CollyneJumah
 * Date: 13-Jun-18
 * Time: 12:38
 */
//echo 'Done';
//require_once ('connection.php');
$output='';
$filetempname=$_FILES['file']['tmp_name'];
if(isset($_FILES['file']['name'][0])){
//    echo "Ok";
    foreach ($_FILES['file']['name'] as $keys => $values){
        if(move_uploaded_file($filetempname [$keys],'images/'.$values )){
            $output.='<div class="col-md-3" ><img src="images/'.$values.'">';
//                $sql="INSERT INTO files WHERE  $regNumber=$_SESSION['login'];
        }echo "File uploaded successfuly";
    }
}

?>