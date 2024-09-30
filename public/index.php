<?php
require '../app/classes/Login.php';


$login = new Login;

$login->email = 'teste@email.com';
$login->password = '123';

echo $login->auth($)
