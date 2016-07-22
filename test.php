<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title></title>
</head>
<SCRIPT type="text/javascript">
       <!-- 此check()函式在最後的「傳送」案鈕會用到 -->
        function check()
        {
                <!-- 若<form>屬性name值為reg裡的文字方塊值為空字串，則顯示「未輸入姓名」 -->
                if(reg.username.value == "") 
                {
                        alert("未輸入姓名");
                }
                <!-- 若<form>屬性name值為reg裡的文字方塊與下拉式選單值為空字串或是沒有選擇月或日，則顯示「未輸入完整生日日期」 -->
                else if(reg.year.value == "" || reg.month.value == "00" || reg.day.value == "00")
                {
                        alert("未輸入完整生日日期");
                }
                <!-- 若<form>屬性name值為reg裡的核取方塊沒有選擇，則顯示「未選擇性別」 -->
                else if(!reg.sex[0].checked && !reg.sex[1].checked)
                {
                         alert("未選擇性別");
                }
                <!-- 若以上條件皆不符合，也就是表單資料皆有填寫的話，則將資料送出 -->
                else reg.submit();
         }
</SCRIPT>
<body>
<form name="reg" method="post" action="index.html">

姓名：<input name="username" type="text" size="16" /><br>

生日：民國
<input name="year" type="text" size="5" />
年
<select name="month">
       <option value="00">&lt;請選取&gt;</option>
       <option value="01">01</option>
       <option value="02">02</option>
       <option value="03">03</option>
       <option value="04">04</option>
       <option value="05">05</option>
       <option value="06">06</option>
       <option value="07">07</option>
       <option value="08">08</option>
       <option value="09">09</option>
       <option value="10">10</option>
       <option value="11">11</option>
       <option value="12">12</option>
</select>

月
<select name="day">
       <option value="00">&lt;請選取&gt;</option>
       <option value="01">01</option>
       <option value="02">02</option>
       <option value="03">03</option>
       <option value="04">04</option>
       <option value="05">05</option>
       <option value="06">06</option>
       <option value="07">07</option>
       <option value="08">08</option>
       <option value="09">09</option>
       <option value="10">10</option>
       <option value="11">11</option>
       <option value="12">12</option>
       <option value="13">13</option>
       <option value="14">14</option>
       <option value="15">15</option>
       <option value="16">16</option>
       <option value="17">17</option>
       <option value="18">18</option>
       <option value="19">19</option>
       <option value="20">20</option>
       <option value="21">21</option>
       <option value="22">22</option>
       <option value="23">23</option>
       <option value="24">24</option>
       <option value="25">25</option>
       <option value="26">26</option>
       <option value="27">27</option>
       <option value="28">28</option>
       <option value="29">29</option>
       <option value="30">30</option>
       <option value="31">31</option>
</select><br>

<input type="radio" name="sex" value="男" />男  &nbsp;&nbsp;&nbsp;
<input type="radio" name="sex" value="女" />女 <br>

<!-- type值為button而非submit，另外要加上onClick="check()"來判斷以上的表單資料是否有填寫 -->
<input type="button" value="傳送" onClick="check()" /> &nbsp;&nbsp;&nbsp;
<input type="reset" value="清除" />
</form>
</body>
</html>