<?php
$login=filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$name=filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$pass=filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
$pass_repeat=filter_var(trim($_POST['pass_repeat']),FILTER_SANITIZE_STRING);
$email=filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);

if(mb_strlen($login)<5|| mb_strlen($login)>90){
    echo "login must be at least 5 characters but not more than 90";
exit();
}
else if(mb_strlen($name)<3|| mb_strlen($name)>30){
    echo "Name must be at least 3 characters but not more than 30";
    exit();
}
else if(mb_strlen($pass)<3|| mb_strlen($pass)>10){
    echo "Password must be at least 3 characters but not more than 10";
    exit();
}
elseif ($pass!=$pass_repeat) {
  echo "Passwords are not equals";
    exit();
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "E-mail adress '$email' is incorrect.\n";
    exit();
}

$pass=md5($pass."zxcv");
$mysql=new mysqli('localhost','root','12345','users');
$mysql->query("INSERT INTO  `users`(`name`,`pass`,`login`) VALUES('$name','$pass','$login')");
$mysql->close();

header('Location:/');
?>


