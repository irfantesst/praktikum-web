<!DOCTYPE HTML>
<html>
<head><title>Login</title></head>
<body>

<?php

if (isset($_POST['Login'])){ 
    $username = $_POST['username']; //nilai username dimasukkan dalam $username
    $passwd = $_POST['password']; //nilai password dimasukkan dalam $passwd
    // validasi kondisi $username dan $passwd 
	if($username == "irfan" && $passwd == "root") { //jika $username = irfan dan $passwd = root  
        echo "<h3>Selamat datang..anda telah masuk ke halaman utama$user..</h3>"; //muncul pesan
    } else { //kondisi lain
        echo "<h3>Username dan Password yang kamu masukan salah <br> coba ulangi sekali lagi ! ! ! </br></h3>"; //muncul pesan
    } 
	} 
?>

</body>
</html>