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
	<tr>
		<td>
		<table width="100%" height="27" border="0" cellpadding="0" cellspacing="0" background="images/link.jpg">
			<tr>
				<td width="243" align="center" valign="middle"><b>
				<?php
					echo date("Y-m-d")." ";
				?>
				</b></td>
				<td width="90" align="center" valign="middle"><a href="select.php" class="a">浏览目录</a></td>
				<td width="94" align="center" valign="middle"><a href="index.php" class="a">添加图书</a></td>
				<td width="94" align="center" valign="middle"><a href="select_simple.php" class="a">简单查询</a></td>
				<td width="91" align="center" valign="middle"><a href="select_advanced.php" class="a">高级查询</a></td>
				<td width="94" align="center" valign="middle"><a href="group_by.php" class="a">分组统计</a></td>
				<td width="93" align="center" valign="middle"><a href="exit.php" class="a">退出系统</a></td>
			</tr>
		</table>
		</td>
	</tr>
</table>
<br/>
<br/>
<table width="799" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center" valign="middle">
<?php
include_once("conn/conn.php");
?>
<table width="90%"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" width="5%" height="25" class="top">id</td>
    <td align="center" width="30%" class="top">书名</td>
    <td align="center" width="10%" class="top">价格</td>
    <td align="center" width="20%" class="top">出版时间</td>
    <td align="center" width="10%" class="top">类别</td>
    <td align="center" width="10%" class="top">操作</td>
  </tr>
<?php
	error_reporting(E_ALL & ~E_NOTICE);
	$type=$_GET['type'];
	echo $type;
	$sqlstr = "select * from tb_demo02 where type='$type' order by id";
	$result = mysqli_query($conn,$sqlstr);

	while ($rows = mysqli_fetch_row($result)){
		echo "<tr>";
		for($i = 0; $i < count($rows); $i++){
			echo "<td height='25' align='center' class='m_td'>".$rows[$i]."</td>";
		}
		echo "<td align='center' class='m_td'><a href='#'>修改</a>/<a href=delete.php?action=del&id=".$rows[0]." onclick='return del();'>删除</a></td>";
		echo "</tr>";
	}
?>
</table>
</td>
    </tr>
</table>
<br/>
 <table width="799" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="67" background="images/bottom.jpg">&nbsp;</td>
    </tr>
</table>
</center>
</body>
</html>
