<!--
		Algoritma
		1. Mulai
		2. Menampilkan formlogin yang menggunakan fungsi validation dan aksi login.php
		3. formlogin menyimpan hasil inputan dalam variabel $username dan $password
		4. fungsi validation akan mengecek value pada $username dan $password sesuai dengan kondisi
		5. jika kondisi tidak terpenuhi akan muncul peringatan, jika terpenuhi akan melakukan aksi pada login.php
		6. selesai

-->
<!DOCTYPE html><head>

<title>Tugas Praktikum</title>
<script type="text/javascript">
function validation() {  //fungsi validasi
  var username = formlogin.username.value; //var username mengakses nilai dari username formlogin 
  var passwd = formlogin.password.value;  //var passwd mengakses nilai password formlogin
  var valid = /^[A-Za-z]{1,}$/;  //validasi masukannya huruf abjad antara A sampai Z
  
  if (passwd=='' && username=='') { //cek apakah nilai username dan passwd kosong
 	alert("Username and Password is empty!"); 
	formlogin.username.focus(); //akan kembali pada textbox username
	return false;  
  } else if (passwd==''){ //cek apakah nilai password kosong
  	alert("Password is empty!"); 
	formlogin.password.focus(); //akan kembali pada password
	return false;  
  } else if (username==''){  // mengecek apakah nilai username kosong
	alert("Username is empty!");
	formlogin.username.focus(); //akan kembali pada username
	return false;  
  } else if (username !='' && passwd!='' && !username.match(valid) || !passwd.match(valid)){ //cek apakah username dan passwd hanya abjad saja
	alert("Username/password isn't valid!");
	formlogin.username.value = ""; //clear isian username
	formlogin.password.value = ""; //clear isian password
	formlogin.username.focus(); //akan kembali pada username
	return false;  
  } 
 
  }
</script>
</head>

<body bgcolor="#c9e6f8">
<center>
<div>
  <div style="background-color:white;width:450px;height:300px;border:5px solid red; margin-top:100px;"> 
  <h1 style="color:red">Login</h1>
  <hr width="350px" color="red">
  <br />
  
  <form name="formlogin" method="post" action="login.php" onSubmit="return validation()" > <!-- memanggil fungsi validation dan aksi login.php saat submit ditekan -->
  Username <br />
  <input type="text" name="username" value="" size="35px"/><br />
  Password <br />
  <input type="password" name="password" size="35px"/><br /><br />
  <input type="submit" name="Login" value="Login">
  </form>
  
  </div>
</div>
</center>

</body>
</html>