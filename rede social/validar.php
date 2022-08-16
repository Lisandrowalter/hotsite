<?php
$email=$_POST['email'];
echo $email;
$link =mysqli_connect('localhost','root','','instapet' );
$resultado=mysqli_query($link,"INSERT INTO perfil(email) VALUES('$email')");