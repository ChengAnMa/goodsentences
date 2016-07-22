<!DOCTYPE HTML>
<html>
<head>
<link href="favicon.ico"rel="SHORTCUT ICON">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Adding......</title>
<? include("mysql_connect.inc.php"); ?>

<style type="text/css">

body{
	 font-family: Arial, "Microsoft JhengHei";
  }

.banner{
	text-align:center;
	margin : 0 auto;
	background-color:rgba(0,0,0,0.1);
	width:850px;
	height:200px;
  }

.item{
	text-align:center;
	margin : 0 auto;
	margin-top : 5px;
	width:1000px;
	height:50px;
  }

#css_table {
	display:table;
	text-align:center;
	margin :0 auto;
	background-color:rgba(0,0,0,0.1);
	width:850px;
	border:#FFF;
  }

.css_tr {
    display: table-row;
  }

.css_td{
    display: table-cell;
	width:200px;
  }

.bottom{
	text-align:center;
	margin :0 auto;
	margin-top : 5px;
	font-size :10px;
	background-color:rgba(0,0,0,0.1);
	width: 850px;
	height: 12px;
  }


</style>

</head>

<div align="center" style="margin-top:200px" >

<div><img src="ajax-loader.gif"></div>

<?php
$No      = $_POST["No"];
$Content = $_POST["Content"];
$Author  = $_POST["Author"];
$Where   = $_POST["Where"];
$Other   = $_POST["Other"];
$Date    = $_POST["Date"];

/*
echo "$No<br>";
echo "$Content<br>";
echo "$Author<br>";
echo "$Where<br>";
echo "$Other<br>";
echo "$Date<br>";
*/

        //新增資料進資料庫語法
        $sql = "INSERT INTO goodsentence VALUES ('$No','$Content', '$Author', '$Where', '$Other', '$Date')";
		//echo "$sql<br>";
        if(mysql_query($sql))
        {
                echo '新增中.....';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=../upload/insert.php>';
        }
        else
        {
                echo '新增失敗!!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=../upload/insert.php>';
			    //echo mysql_errno().": ".mysql_error()."<BR>";
        }		
?>


</div>


<body>

</body>
</html>



