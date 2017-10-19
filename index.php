<?php
     if ( !( $database = mysqli_connect( "localhost","root","","announment" ) ) )                      
            die( "Could not connect to database </body></html>" );

    if ( !mysqli_select_db(  $database,"announment" ) )
            die( "Could not open products database </body></html>" );

    mysqli_query($database,"SET NAMES UTF8");    
    if ( !( $result = mysqli_query($database,"SELECT * FROM list ORDER BY top DESC ,no DESC") ) ) 
         {
            print( "<p>Could not execute query!</p>" );
            die( mysqli_error($database) . "</body></html>" );
         }

    @$result=mysqli_query($database,"select * from list ORDER BY top DESC ,no DESC limit $start, $number");
    
?>

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
<!--table-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
<!--naverbar-->
  <nav>
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo"><i class="material-icons">&nbsp;cloud</i>宿舍公告系統</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="login.php"><i class="material-icons left">assignment_ind<!--icon圖示放的地方--></i>管理者登入<!--旁邊的字--></a></li>
      </ul>
    </div>
  </nav>
<!--container-->
<section>
  <h3 style="text-align: center">歡迎來到這裡。</h3>
  <table class="table table-hover">
        <thead>
          <tr>
              <th style="width:5%">編號</th>
              <th style="width:55%">標題</th>
              <th style="width:10%">日期</th>
              <th style="width:10%">發佈單位</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
            <td>$0.87</td>
          </tr>

        </tbody>
      </table>
</section>
</body>
</html>