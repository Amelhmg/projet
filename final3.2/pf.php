<?php
$conn=mysqli_connect('localhost','root','','t-agency') ;

echo "Connected successfully"; 



$Nom=$_POST['Nom'];
$hotel=$_POST['hotel'];
$adresse=$_POST['adresse'];
$mail=$_POST['mail'];
$Prixtrp=$_POST['Prixtrp'];
$Prixdb=$_POST['Prixdb'];
$Prixsing=$_POST['Prixsing'];

$req="INSERT INTO hotels(Nom,hotel,adresse,mail,Prixtrp,Prixdb,Prixsing) values ('$Nom','$hotel','$adresse','$mail','$Prixtrp','$Prixdb','$Prixsing')";
$res=mysqli_query($conn,$req);









?>  