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
<table width="799" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center" valign="middle">
<?php
include_once("conn/conn.php");
?>
<table width="90%"  border="1" cellpadding="0" cellspacing="0">
  </br>
  </br>
     <tr rowspan="6">
    <form name="intSelect" method="post" action="">
	<label>图书类型: </label>
	<select name="type">
             <option value="All">All</option>
             <option value="Java">Java</option>
             <option value="PHP">PHP</option>
	     <option value="Linux">Linux</option>
   	     <option value="C/C++">C/C++</option>
	</select>&emsp;
	<input type="submit" name="Submit" value="查询">
    </form>
     </tr>
  </br>
  <tr>
    <td align="center" width="30%" class="top">图书类型</td>
    <td align="center" width="10%" class="top">数量</td>
    <td align="center" width="10%" class="top">操作</td>
  </tr>
<?php
	
	error_reporting(E_ALL & ~E_NOTICE);
	//$sqlstr = "select * from tb_demo02 order by id";
	//$str=$_POST['select'];
	$type=$_POST['type'];
	//echo $class;
	//echo $firstPrice;
	//echo $secondPrice;

	echo "<br/>";
	if($type=="All")
	{
		$sqlstr="select type,count(*) from tb_demo02 group by type ";
	}else{
		$sqlstr="select type,count(*) from tb_demo02 where type='$type'";
	}
	echo "<br/>";
	$result = $conn->query($sqlstr);

	while ($rows = $result->fetch()){
		echo "<tr>";
		for($i = 0; $i < $result->columnCount(); $i++){
			echo "<td height='25' align='center' class='m_td'>".$rows[$i]."</td>";
		}
		echo "<td align='center' class='m_td'><a href=look.php?action=look&type=".$rows[0].">查看</a></td>";
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
