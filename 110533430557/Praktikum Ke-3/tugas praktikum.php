
<!DOCTYPE html><head>

<title>Tugas Praktikum</title>
<script type="text/javascript">
function validasi() {  //fungsi validasi
  var user = formlogin.username.value; //var username mengakses nilai dari username formlogin 
  var pass = formlogin.password.value;  //var passwd mengakses nilai password formlogin
  var valid = /^[A-Za-z]{1,}$/;  //validasi masukannya huruf abjad antara A sampai Z
  
  if (pass=='' && user=='') { //cek apakah nilai username dan passwd kosong
 	alert("Username and Password is empty!"); 
	formlogin.username.focus(); //akan kembali pada textbox username
	return false;  
  } else if (pass==''){ //cek apakah nilai password kosong
  	alert("Password is empty!"); 
	formlogin.password.focus(); //akan kembali pada password
	return false;  
  } else if (user==''){  // mengecek apakah nilai username kosong
	alert("Username is empty!");
	formlogin.username.focus(); //akan kembali pada username
	return false;  
  } else if (user !='' && pass!='' && !user.match(valid) || !pass.match(valid)){ //cek apakah username dan passwd hanya abjad saja
	alert("Username/password isn't valid!");
	formlogin.username.value = ""; //clear isian username
	formlogin.password.value = ""; //clear isian password
	formlogin.username.focus(); //akan kembali pada username
	return false;  
  } 
 
  }
</script>
</head>

<body bgcolor="#1B676B">
<center>
<div>
  <div style="background-color:white;width:450px;height:300px;border:5px solid cyan; margin-top:100px;"> 
  <h1 style="color:cyan">LOGIN</h1>
  <hr width="350px" color="cyan">
  <br />
  
  <form name="formlogin" method="post" action="login.php" onSubmit="return validasi()" > <!-- memanggil fungsi validasi dan aksi login.php saat submit ditekan -->
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