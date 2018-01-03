# HTML5 期末作業

## 運用到的元素：

1. 修改網頁標題
	<title>...</title>

2. 修改網頁的icon
	<link rel="shortcut icon" href="images/icon.png">

3. 使用Google字型
	@import url(https://fonts.googleapis.com/earlyaccess/notosanstc.css);
      * {
          font-family: 'Noto Sans TC';
        }

4. 顯示現在的時間
	function ShowTime(){
    　var Today=new Date();
      var y=Today.getFullYear();
      var mo=Today.getMonth()+1;
      var d=Today.getDate();
    　var h=Today.getHours();
    　var m=Today.getMinutes();
    　var s=Today.getSeconds();　
    　document.getElementById('showbox').innerHTML =y+"年"+mo+"月"+d+"日"+" "+h+':'+m+':'+s;
    　setTimeout('ShowTime()',1000);
  }

5. 使用側欄選單和導覽列
	側欄選單中增加了wave的效果，讓使用者知道自己選擇了什麼選項。

6. Grid
	<div class="container">
    	<!-- Page Content goes here -->
    </div>
    增加了這一段程式碼就讓網頁的內容置中，增加可讀性。

7. Cards
	在主頁增加Cards，能讓使用者知道網頁有什麼功能。
