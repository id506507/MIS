<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>宿舍公告管理系統</title>
  
  
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
   <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
<!--icon-->
      <link rel="shortcut icon" href="images/icon.ico">
<!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <style>
  body {
  background: #eee !important;
}

.wrapper {
  margin-top: 200px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 700px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.1);
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 70px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  font-size: 16px;
  height: auto;
  padding: 10px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="text"] {
  margin-bottom: -1px;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 20px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
@import url(https://fonts.googleapis.com/earlyaccess/notosanstc.css);
      * {
          font-family: 'Noto Sans TC';
        }
</style>
  
</head>

<body>
<!--naverbar-->
        <nav>
        <div class="nav-wrapper">
          <a href="index.php" class="brand-logo"><i class="material-icons">&nbsp;cloud</i>宿舍公告系統</a>
        </div>
      </nav>
<!--login-->
    <div class="wrapper">
    <form class="form-signin" action="ver.php" method="post">       
      <input type="text" class="form-control" name="username" placeholder="用戶名稱" required="" autofocus="" />
      <input type="password" class="form-control" name="pw" placeholder="密碼" required=""/>      
      <button class="btn btn-lg btn-primary btn-block" type="submit">登入</button>   
    </form>
  </div>
</body>
</html>
