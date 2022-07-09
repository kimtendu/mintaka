<?php 
$email = "kimtendu@gmail.com";
$password = 'test12345';
$passwordMD5 = md5($password);
echo $passwordMD5 ; //db
echo '<br>';


$password2 = 'Test12345';
$password2Md5 = MD5($password2);
echo $password2Md5;
if ($passwordMD5  === $password2Md5 ){
	echo 'u r user';
} else {
	echo 'error. You not user';
}