<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>宿舍公告系統</title>
    <link rel="shortcut icon" href="photo/icon.ico"><!--icon-->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script><!--navbar-->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script><!--form-->

    <script src="ckeditor/ckeditor.js"></script></script><!--text editor-->

    <style type="text/css">
        .header{
        font-size: 250%;
        color: #6699ff;
        font-family: Microsoft JhengHei;
        padding:30px 50px 20px 50px;
        }
        .search{
            float: right;
            padding-right: 20px;
            color: #6699ff;
            font-family: Microsoft YaHei;
            font-size: 100%;  
        }
        a {
            text-decoration:none;
            color: #6699ff;
        }
        section {
        padding: 0px 50px 0px 0px;
        Font-family:Microsoft YaHei;
        }
        nav{
            margin: 30px 50px 20px 50px;
        }
    </style>
</head>
<body>
    <header id="header">
        <div class="header"><a href="manage.php">宿舍公告系統</a></div>
    </header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img alt="Brand" src="photo/navbar.png" width="20px" height="20px">
                </a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="manage.php">管理首頁</a></li>
                <li class="active"><a href="add.php">建立新公告</a></li>
                <li><a href="manageannoun.php">管理公告</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> 登出</a></li>
            </ul>
        </div>
    </nav>
    <section>
        <form class="form-horizontal"action="addtodb.php" method="post">
            <div class="form-group">
		        <label class="control-label col-sm-2">標題:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" placeholder="標題" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">發佈單位:</label>
                <div class="col-sm-10">          
                    <input type="text" class="form-control" name="org" placeholder="發佈單位" required>
                </div>
            </div>
            <div class="form-group">
			    <label class="col-lg-2 control-label">文章內容:</label>
			    <div class="col-lg-10">
			  	    <textarea name="content" class="ckeditor" required></textarea>
                    <script>
                        CKEDITOR.replace('content', {});
                    </script>
			    </div>
		    </div>
          <div class="form-group">
			<label for="article_file" class="col-lg-2 control-label">發佈時間:</label>
			<div class="col-lg-10">
				<input type="text" name="date" value="<?=date("Y-m-d");?>" class="form-control auto_selectbar" required> (年-月-日) 
			</div>
		  </div>
          <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <?php
					            if(@$getData['article_top'] == "1"){
						        $checked = "checked";
					            }
				            ?>
                            <input type="checkbox" name="top" value="1"><?=@$checked;?>置頂</label>
                    </div>
                </div>
           </div>
          <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">發佈</button>
             </div>
           </div>
		</form>
    </section>
</body>
</html>
