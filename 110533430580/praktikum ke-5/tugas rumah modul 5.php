<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 

<head> 
	<title>Login Form</title>
<style type="text/css">

</style>	
</head>

<body bgcolor="blue" onLoad="document.formlogin.user.focus();">
<form name="formlogin" align="center" action="<?php $_SERVER['php_self'];?>" method="post" onsubmit="return cek(this)">
<div id="kotak">
<h1 align="center">LOGIN</h1>
<hr width="270px" color="white">
<br/>
<table border=0 align="center">
<tr>
<td>Username :</td>
</tr>
<tr>
<td><input name="user" onKeyPress="return cekHuruf(event)" type="text" value="" autocomplete="off"/>
</td>
</tr>
<td>Password :</td>
</tr>
<tr>
<td><input name="password" onKeyPress="return cekHuruf(event)" type="password" value=""/>
</td>
</tr>  
<tr>
<td align="center" height="50px">
<input type="submit" name="ok" value="LOGIN">
</td>
</tr>
</table>
</div>
</form>

<script language="JavaScript" type="text/javascript">
function cek(){
    if(formlogin.user.value == ""){
        alert('Username belum di masukkan !');
        return false;
    }
    else if(formlogin.password.value==""){    
        alert('Password belum di masukkan !');
        return false;
    }    
return true;
}
function cekHuruf(e){
    e = (e) ? e : window.event
    var charCode = (e.which) ? e.which : e.keyCode
    if ((charCode > 31 && charCode < 65) || (charCode > 90 && charCode < 97) || charCode > 122) {
        alert('Tipe Username dan Password di usahakan huruf !');
        return false;
    }
    return true;
}
</script>

<?php
if(is_string($_POST['user']) AND ($_POST['password'])){    
    if (($_POST['user']=='irfan')AND($_POST['password']=='door')){
        echo 'Login telah berhasil <br/>';
        echo 'WELCOME ' . $_POST['user'] ;
        require_once './administ.php';
        exit();
    }
    else{
        echo "<script>alert ('Password dan Username salah coba lagi !');</script>";
    }
}
?>
</body>
</html>
