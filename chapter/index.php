<!--  index.php  显示所有章节 -->
<?php require_once '../connections/conn.php';?>
<?php
MySQLi_query($conn,"set names 'utf8'");
$query_Chapter="select * from Chapter";
$Chapter=MySQLi_query($conn,$query_Chapter) or die(mysqli_error($conn));
$row_Chapter=mysqli_fetch_assoc($Chapter);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>所有章节</title>
</head>
<body bgcolor="#f4f4f4">
	<table  border="0" cellspacing="" cellpadding="" width="100%">
            <tr><td align="center" colspan="6" ><font color="#1B2AE0" size="7"  >章管理</font></td></tr>              
            <td align="center" valign="middle"><a href="allchapter.php"><font color="#1B2AE0" size="4"  >章目录</font></a></td>
            <td align="center" valign="middle"><a href="addchapter.php"><font color="#1B2AE0" size="4"  >添加章</font></a></td>
            <td align="center" valign="middle"><a href="chapterlist.php"><font color="#1B2AE0" size="4"  >编辑章信息</font></a></td>
        </tr>
            <table border="0" align="center"  >
                    <tr><td colspan="3" align="center"><h2>所有章</h2></td></tr>
                    <tr> <td valign="middle" align="center"width="300"><b>章序号</b></td>
                        <td valign="middle" align="center" width="300"><b>章名称</b></td>
                    </tr>
                        <?php do{ ?> 
                            <tr valign="middle" align="center"> 
                                <td align="center"><?php echo $row_Chapter['number'];?></td>
                               <td align="center"><?php echo $row_Chapter['chaptername'];?></td>
                              
                            </tr>
                        <?php }while ($row_Chapter= mysqli_fetch_assoc($Chapter));
                        ?>
		</table>
	</body>
</html>

