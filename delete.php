<?php
header("Content-type:text/html;charset=utf-8");
include_once("conn/conn.php");
if($_GET['action']=="del")
{
	$sqlstr1="delete from tb_demo02 where id=".$_GET['id'];
	$result=$conn->exec($sqlstr1);
	if($result)
	{
		echo "!!!!!!!!!!!!!";
		echo "<script>alert('删除成功');location='".$_SERVER["HTTP_REFERER"]."';</script>";
	}else{
		echo "删除失败";
	}
}
?>

