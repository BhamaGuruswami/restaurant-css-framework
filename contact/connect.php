<?php
$conne = mysqli_connect("localhost","root", "");
if(!$conne){
    die ("connection failed:" . mysqli_error($conne));
}
$select_db = mysqli_select_db($conne,"restaurant"); 
if(!$select_db){
    die ("database selected failed:" . mysqli_error($conne));
}

?>
    