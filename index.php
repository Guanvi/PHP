<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>添加数据</title>
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
  <form name="intFrom" method="post" action="index_ok.php">

		<table width="100%" height="200"  border="0" cellpadding="0" cellspacing="0">
          <tr align="center" valign="middle">
		  <td width="30%" class="c_td">&nbsp;</td>
            <td width="10%" align="right" class="c_td">&nbsp;</td>
            <td width="30%" class="c_td">&nbsp;</td>
			<td width="30%" class="c_td">&nbsp;</td>
          </tr>
          <tr>
		  <td class="c_td">&nbsp;</td>
            <td align="right" valign="middle" class="c_td">书名：</td>
            <td align="center" valign="middle" class="c_td"><input type="text" name="bookname"></td>
			<td class="c_td">&nbsp;</td>
          </tr>
          <tr>
		  <td class="c_td">&nbsp;</td>
            <td align="right" valign="middle" class="c_td">价格：</td>
            <td align="center" valign="middle" class="c_td"><input type="text" name="price"></td>
          	<td class="c_td">&nbsp;</td>
		  </tr>
          <tr>
		  <td class="c_td">&nbsp;</td>
            <td align="right" valign="middle" class="c_td">出版时间：</td>
            <td align="center" valign="middle" class="c_td"><input type="text" name="f_time"></td>
            <td class="c_td">&nbsp;</td>
		  </tr>
          <tr>
		  <td class="c_td">&nbsp;</td>
            <td align="right" valign="middle" class="c_td">所属类别：</td>
	    <td align="left" valign="middle" class="c_td">&emsp;&emsp;&emsp;
		<select name="type">
			<option value="Linux">Linux</option>
			<option value="Java">Java</option>
			<option value="php">php</option>
			<option value="C/C++">C/C++</option>
			<option value="数学">数学</option>
			<option value="人文历史">人文历史</option>

		</select>
            </td>
            <td class="c_td">&nbsp;</td>
		  </tr>
		  <tr align="center" valign="middle">
		  <td class="c_td">&nbsp;</td>
            <td colspan="2" class="c_td">
			<input type="hidden" name="action" value="insert">
			<input type="submit" name="Submit" value="添加">
              <input type="reset" name="reset" value="重置"></td>
           <td class="c_td">&nbsp;</td>
	      </tr>
        </table>
      </form>
</td>
    </tr>
</table>
<br/>
<table width="797" height="67" border="0" cellpadding="0" cellspacing="0" background="images/bottom.jpg">
	<tr><td>&nbsp;</td></tr>
</table>
</center>
</body>
</html>
