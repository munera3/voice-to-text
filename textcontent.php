<?php
 



 $servername="localhost";
 $username="root";
 $password="";
 $dbname="voicetotext";


    $link = mysqli_connect($servername,$username,$password,$dbname);
    if (!$link){
        die("Connection failed: " . mysqli_connect_error());
    }

if(isset($_POST["submit"]))
{   
  $yourtextarea= $_POST["textarea"];

    $sql = "insert into textarea_val (contents) values ('$yourtextarea')";
    $rs = mysqli_query($link, $sql);
}

 mysqli_close($link);
 

?>
