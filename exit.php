<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>浏览数据</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<center>
<table width="799" border="0" cellpadding="0" cellspacing="0">
    <tr>
    	<td  height="106" background="images/banner.jpg">&nbsp;</td>
    </tr>
</table>
<br/>


<form name="intForm" method="post" action="">
<table width="799" border="0" cellpadding="0" cellspacing="0">
    <tr>
	<td rowspan="8"width="400" height="300" background="images/login.png">&nbsp;</td>
        <td><big><strong>用户登陆</strong></big></td>
    </tr>
    <tr><td><strong>&emsp;&emsp;&emsp;&emsp;用户名:</strong>&emsp;<input type="text" name="Name"></td></tr>
    <tr>
	<td><strong>&emsp;&emsp;&emsp;&emsp;密码:</strong>&emsp;&emsp;<input type="password" name="Passwd"></td>
    </tr>
    <tr>
	<td align="center">
		<input type="reset" name="reset" value="重置">
		<input type="submit" name="Submit" value="登录">
	</td>
    </tr>
    <tr><td>&emsp;</td></tr>
    <tr><td>&emsp;</td></tr>

</table>
</form>
<?php
include_once("conn/conn.php");
?>
<?php
error_reporting(E_ALL & ~E_NOTICE);
$user=$_POST['Name'];
$passwd=$_POST['Passwd'];
$result=mysqli_query($conn,"select * from user");
if($user && $passwd)
{
	while($row=mysqli_fetch_object($result))
	{
		if($user==$row->Name && $passwd==$row->Passwd)
		{
			echo "登陆成功";
			header('location:select.php');
		}else{
			echo "<script type='text/javascript'>alert('用户名或密码错误!');</script>";
		}
	}
}
?>
<br/>
 <table width="799" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="67" background="images/bottom.jpg">&nbsp;</td>
    </tr>
</table>
</center>
</body>
</html>
