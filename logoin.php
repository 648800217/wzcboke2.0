<?php
$msg='登录界面';
 if(!empty($_POST)){
    include_once './fu.php';
    $name=$_POST['username'];
    $password=$_POST['password'];
  if(empty($name)||empty($password)){
      $msg='请输入用户名和密码';
  }else{
      $name=$_POST['username'];
      $password=$_POST['password'];
      $sql="SELECT * FROM user where name='$name'";
      $res=myc($sql);
  
    //   echo '<pre>';
    //   print_r(myc($sql));
    //   echo '</pre>';
      if(empty($res)){
          $msg='没有此用户';
      }else{
          if($res[0]['password']===$password){
              echo '正确';
              session_start();
              $_SESSION['user_id'] = $res[0]['id'];
              header("location:./backindex.php");
          }else{
            $msg='用户名或密码错误';
          }
      }
  }

 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./node_modules/mui-master/dist/css/mui.css">
    <link rel="stylesheet" href="./node_modules/nprogress/nprogress.css">
    <link rel="stylesheet" href="./css/logo.css">

    <title>后台管理系统</title>
</head>

<body>
   <h1 style="text-align:center; margin-top:30px;"><?php echo $msg?></h1>
    <div class="container row">
    

           
<form class="form-horizontal form row col-lg-7 col-md-offset-5" action='' method='post'>
    <div class='xxt '>
    <div class="form-group col-lg-12 row">
    <label for="inputEmail3" class="col-sm-2  col-lg-3  control-label">用户名:</label>
    <div class="col-sm-10 col-lg-7">
      <input name='username' type="text" class="form-control " id="inputEmail3" placeholder="用户名">
    </div>
  </div>
  <div class="form-group col-lg-12 row">
    <label for="inputPassword3" class="col-sm-2 col-lg-3   control-label">密码:</label>
    <div class="col-sm-10 col-lg-7">
      <input name='password' type="password" class="form-control" id="inputPassword3" placeholder="密码">
    </div>
  </div>
  <div class="form-group">
    
  </div>
  <div class="form-group row">
    <div class="col-sm-offset-4 col-sm-10 col-xs-offset-5  col-lg-offset-5">
      <button type="submit" class="btn btn-success">登录</button>
    </div>
  </div>
</div>
</form>
            
        </div>
    </div>
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./node_modules/nprogress/nprogress.js"></script>
    <script src="./node_modules/mui-master/dist/js/mui.js"></script>
    <script>
        NProgress.start();
        setTimeout(function() {

            NProgress.done();
        }, 2000)
    </script>
</body>

</html>