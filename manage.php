<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>宿舍公告管理系統</title>
 <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
<!--icon-->
      <link rel="shortcut icon" href="images/icon.ico">
<!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<!--Google 字型-->
      <style>
      @import url(https://fonts.googleapis.com/earlyaccess/notosanstc.css);
      * {
          font-family: 'Noto Sans TC';
        }
    </style>
</head>
<body>
<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
<!--naverbar-->
      <nav teal lighten-2>
        <div class="nav-wrapper teal lighten-2" >
          <a href="manage.php" class="brand-logo"><i class="material-icons">&nbsp;cloud</i>宿舍公告系統</a>

          <ul class="right hide-on-med-and-down">
            <li><a href="add.php"><i class="material-icons left">assignment_ind<!--icon圖示放的地方--></i>建立新公告<!--旁邊的字--></a></li>
            <li><a href="manageannoun.php"><i class="material-icons left">assignment_ind<!--icon圖示放的地方--></i>管理公告<!--旁邊的字--></a></li>
            <li><a href="index.php"><i class="material-icons left">assignment_ind<!--icon圖示放的地方--></i>管理者登出<!--旁邊的字--></a></li>
          </ul>
        </div>
      </nav>
      <section>
        <div class="jumbotron">
          <br>
            <h3>管理員可以在此系統發佈消息或管理公告。</h3>
            <h3>在「建立新公告」中可發佈新消息及上傳所需的附件。</h3>
            <h3>在「管理公告」中可編輯及刪除公告。</h3>
            <h3>如在使用此系統時出現任何問題或有意見提出，可<a href="mailto:id506507@gmail.com">聯絡</a>告知。</h3>
        </div>
    </section>
</body>
</html>