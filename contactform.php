<?php

$firstname=$_POST['FIRSTNAME'];
$lastname=$_POST['LASTNAME'];
$email=$_POST['email'];
$message=$_POST['message'];

$mailto ="divyammishra0918@gmail.com";
$subject="MESSAGE FROM PORTFOLIO";
$headers= "FROM ".$firstname."\r\n".
"CC:divyam.mishra.ug21@nsut.ac.in";
$txt="You have Received a mesasage from ".$firstname."\r\nEmail: ".$email ."\r\nMessage: ".$message;
if($email!=NULL){
    mail($mailto,$subject,$txt,$headers);
}
header('Location:thank.html');  











?>