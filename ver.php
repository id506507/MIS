<?php session_start(); 
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
if ( !( $database = mysqli_connect( "localhost","root","","announment") ) )//記住要寫要connect的DB名稱                      
            die( "Could not connect to database </body></html>" );

if ( !mysqli_select_db( $database , "announment") )
{
            die( "Could not open products database </body></html>" );
            echo  mysqli_connect_error(); 
     }

$id = $_POST['username'];
$pw = $_POST['pw'];

$sql = "SELECT * FROM account where username = '$id'";
$result = mysqli_query($database,$sql);
$row = @mysqli_fetch_row($result);

if($id != null && $pw != null && $row[0] == $id && $row[1] == $pw)
{
        $_SESSION['username'] = $id;
        echo '<script type="text/javascript">alert("登入成功");</script>';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=manage.php>';
}
else
{
        echo '<script type="text/javascript">alert("登入失敗");</script>';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
}
?>