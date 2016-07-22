<!DOCTYPE HTML>
<html>
<head>
<link href="favicon.ico"rel="SHORTCUT ICON">
<!--For 漂亮表格的函式庫-->
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure-min.css">
<!--End-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Delete Sentence</title>
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
	background-color:#00a3ef;
	width: 850px;
	height: 12px;
  }

  .button {
	display: inline-block;
	position: relative;
	margin: 10px;
	padding: 0 20px;
	text-align: center;
	text-decoration: none;
	font: bold 12px/25px Arial, sans-serif;

	text-shadow: 1px 1px 1px rgba(255,255,255, .22);

	-webkit-border-radius: 30px;
	-moz-border-radius: 30px;
	border-radius: 30px;

	-webkit-box-shadow: 1px 1px 1px rgba(0,0,0, .29), inset 1px 1px 1px rgba(255,255,255, .44);
	-moz-box-shadow: 1px 1px 1px rgba(0,0,0, .29), inset 1px 1px 1px rgba(255,255,255, .44);
	box-shadow: 1px 1px 1px rgba(0,0,0, .29), inset 1px 1px 1px rgba(255,255,255, .44);

	-webkit-transition: all 0.15s ease;
	-moz-transition: all 0.15s ease;
	-o-transition: all 0.15s ease;
	-ms-transition: all 0.15s ease;
	transition: all 0.15s ease;
}


/* Green Color */

.green {
	color: #3e5706;

	background: #a5cd4e; /* Old browsers */
	background: -moz-linear-gradient(top,  #a5cd4e 0%, #6b8f1a 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#a5cd4e), color-stop(100%,#6b8f1a)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #a5cd4e 0%,#6b8f1a 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #a5cd4e 0%,#6b8f1a 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #a5cd4e 0%,#6b8f1a 100%); /* IE10+ */
	background: linear-gradient(top,  #a5cd4e 0%,#6b8f1a 100%); /* W3C */
}

/* Blue Color */

.blue {
	color: #19667d;

	background: #70c9e3; /* Old browsers */
	background: -moz-linear-gradient(top,  #70c9e3 0%, #39a0be 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#70c9e3), color-stop(100%,#39a0be)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #70c9e3 0%,#39a0be 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #70c9e3 0%,#39a0be 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #70c9e3 0%,#39a0be 100%); /* IE10+ */
	background: linear-gradient(top,  #70c9e3 0%,#39a0be 100%); /* W3C */
}

/* Gray Color */

.gray {
	color: #515151;

	background: #d3d3d3; /* Old browsers */
	background: -moz-linear-gradient(top,  #d3d3d3 0%, #8a8a8a 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#d3d3d3), color-stop(100%,#8a8a8a)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #d3d3d3 0%,#8a8a8a 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #d3d3d3 0%,#8a8a8a 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #d3d3d3 0%,#8a8a8a 100%); /* IE10+ */
	background: linear-gradient(top,  #d3d3d3 0%,#8a8a8a 100%); /* W3C */
}

.button:hover {
	-webkit-box-shadow: 1px 1px 1px rgba(0,0,0,.29), inset 0px 0px 2px rgba(0,0,0, .5);
	-moz-box-shadow: 1px 1px 1px rgba(0,0,0,.29), inset 0px 0px 2px rgba(0,0,0, .5);
	box-shadow: 1px 1px 1px rgba(0,0,0,.29), inset 0px 0px 2px rgba(0,0,0, .5);
}
.button:active {
	-webkit-box-shadow: inset 0px 0px 3px rgba(0,0,0, .8);
	-moz-box-shadow: inset 0px 0px 3px rgba(0,0,0, .8);
	box-shadow: inset 0px 0px 3px rgba(0,0,0, .8);
}


</style>

</head>

<?php  
        //將資料庫裡的佳句做總和顯示在畫面上
        $sql = "SELECT * FROM goodsentence Order by No DESC";
        $result = mysql_query($sql);
		while($row = mysql_fetch_row($result))
        {
		  $counter = $counter +1;
        }
?>


  <div>
      <div class="banner"><img src="banner.jpg" border="0" width="850" height="200"></div>
  

  <div id="css_table" style="margin-top:5px">
  



 <?  
echo "目前最新一筆的資料編號：";  //顯示目前資料庫中的資料總筆數
echo "$counter"; 
?>

<form class="pure-form"  method="post" action="/upload/deleteDB.php">
要刪除的資料編號：<input type="text" name="No" /><br>
<input class="pure-button pure-button-primary"  type="submit" value="刪除"/>
<input class="pure-button pure-button-primary" type="reset" value="重新輸入"/><br>
<a href="/upload/show.php" class="button blue">Sentence Lists</a>
<a href="/upload/insert.php" class="button blue">Add Sentences</a><br>
</form>


  
  </div>    
      
<div class="bottom">COPYRIGHT  2012-2014 . DESIGNED BY CHENG-AN MA . ALL RIGHT RESERVED</div>
</div>


<body>






</body>
</html>