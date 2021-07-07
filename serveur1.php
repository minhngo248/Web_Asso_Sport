<?php
$email=trim($_POST['email']);
$password=trim($_POST['password']);
if ($email!='dze@eisti.eu' || $password!='MotSecret')
echo "Echec de connexion";
else
echo "Connexion réussie";
?>