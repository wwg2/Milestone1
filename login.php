
<?php 

$host="local host";
$user="root";
$password="";
$db="demo";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['username'])){

	$uname=$_POST['username']:
	$password=$_POST['password'];

	$sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1"; 
	$result=mysql_query($sql);

	if(mysql_num_rows($result)==1){
		echo "You Have Logged In";
		exit();
	}
	else{
		echo "You Have Entered Incorrect Details"
		exit();
	}
}
?>


<html>
<head>
<title> Login Form </title>
<link rel="stylesheet" a href="css/style.css">
</head>
<body>
	<div class="container">
	<form>
	<div class="form-input">
		<input type="text" name="text" placeholder="Enter the User Name"/>
			</div>
	<div class="form-input">
		<input type="password" name="password" placeholder="Password"/> 
			</div>
	<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
			</form>
	</div> 
</body>
</html> 
	
