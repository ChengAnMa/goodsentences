<!DOCTYPE HTML>
<html>
<head>
<link href="favicon.ico"rel="SHORTCUT ICON">
<!--For 漂亮表格的函式庫-->
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure-min.css">
<!--End-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Cheng-An Sentence Lists</title>
<? include("mysql_connect.inc.php"); ?>

<!--頂端ICON函式庫 jQuery-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>  
<script type="text/javascript" src="/source/jquery.mousewheel-3.0.6.pack.js"></script>
<link rel="stylesheet" href="/source/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="/source/jquery.fancybox.pack.js"></script>
<link rel="stylesheet" href="/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
<script type="text/javascript" src="/source/helpers/jquery.fancybox-buttons.js"></script>
<link rel="stylesheet" href="/source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
<script type="text/javascript" src="/source/helpers/jquery.fancybox-thumbs.js"></script>

<script type="text/javascript">
    $(function() {
        $(".fancybox").fancybox();
    });
</script>
<?  //The end!! fancybox  ?>


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
	background-color:rgba(0,0,0,0);
	width:850px;
  }

.css_tr {
    display: table-row;
  }

.css_td{
    display: table-cell;
	width:200px;
  }

#gotop {
    display: none;
    border-radius:10px;
    position: fixed;
    right: 20px;
    bottom: 20px;   
    padding: 10px 15px;   
    font-size: 20px;
    background-color: #00a3ef;
    color: white;
    cursor: pointer;
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


      <div class="banner"><img src="banner.jpg" border="0" width="850" height="200"></a></div>
	  
  <div width="850px" style="margin-top:5px;">

  <table border="2px" class="pure-table pure-table-bordered" width="850px" align="center">
  <thead>
  <tr>
		<td><? echo "內容"; ?></td>
		<td><? echo "作者"; ?></td>
		<td><? echo "出處"; ?></td>
		<td><? echo "備註"; ?></td>
		<td><? echo "新增時間"; ?></td>
  </tr>
  </thead>
  
   <?php  
        //將資料庫裡的所有佳句顯示在畫面上
        $sql = "SELECT * FROM goodsentence order by No desc";
        $result = mysql_query($sql);
   ?>
   <tbody>
   <?php
         while($row = mysql_fetch_row($result))
        {
		 echo "<tr>";
		// echo "<td>";
		// echo "$row[0]";
		// echo "</td>";
		 echo "<td>";
		 echo "$row[1]";
		 echo "</td>";
		 echo "<td>";
		 echo "$row[2]";
		 echo "</td>";
		 echo "<td>";
		 echo "$row[3]";
		 echo "</td>";
		 echo "<td>";
		 echo "$row[4]";
		 echo "</td>";
		 echo "<td>";
		 echo "$row[5]";
		 echo "</td>";
		 echo "</tr>";
        }
   ?>
  </tbody>
  </table>

       <div style="text-align:center;">
	       <a href="/upload/insert.php" class="button blue">Add Sentences</a>
           <a href="/upload/delete.php" class="button blue">Delete Sentence</a><br>
	   </div>
		  
          <div class="bottom">COPYRIGHT  2012-2014 . DESIGNED BY CHENG-AN MA . ALL RIGHT RESERVED</div>
          <div id="gotop">˄</div>
  </div>


  <!-- 頁面跳至頂端的ICON-->
<script type="text/javascript">
$(function(){
    $("#gotop").click(function(){
        jQuery("html,body").animate({
            scrollTop:0
        },1000);
    });
    $(window).scroll(function() {
        if ( $(this).scrollTop() > 300){
            $('#gotop').fadeIn("fast");
        } else {
            $('#gotop').stop().fadeOut("fast");
        }
    });
});
</script>
  
  
<body>


</body>
</html>



