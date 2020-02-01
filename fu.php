<?php
header('content-type:text/html;charset=utf-8');
define("HOST","127.0.0.1");
define("NAME","root");
define("PASSWORD","root");
define("DB","wzc");
define("PORT",3306);


   function myfc($sql){
    $link=mysqli_connect(HOST,NAME,PASSWORD,DB,PORT);
    if(!$link){
        echo '连接失败';
        return;
    };
    $res=mysqli_query($link,$sql);
    if($res){
        echo 'success';
        mysqli_close($link);
    }else{
        echo mysqli_error($link);
        mysqli_close($link);
         return false;
        
    }
   };
   function myc( $sql ) {
    $link = mysqli_connect( HOST, NAME, PASSWORD, DB, PORT ); // 建立连接
    if ( !$link ) {
      echo "连接失败";
      return false;
    }

    // 执行 sql, 执行查询语句
    // 成功返回 结果集, 失败 返回 false
    $res = mysqli_query( $link, $sql );

    // 分析结果
    if ( !$res ) {
      // 处理失败
      echo mysqli_error( $link );
      mysqli_close( $link );
      return false;
    }

    // 成功, 得到了结果集 
    $arr = []; // 专门存储从结果集中取出的数据

    // mysqli_fetch_assoc 可以从结果集取数据, 每次取一条, 以关联数组的形式返回
    while( $row = mysqli_fetch_assoc( $res ) ) {
      $arr[] = $row;
    }

    mysqli_close( $link );
    return $arr;
  }


    function islogoin() {
        // 登录拦截
        // 判断 cookie 中有没有 sessionId
        // 1. 有, 尝试获取用户信息 user_id
        //    (1) 获取到了, 啥也不干
        //    (2) 没获取到, 拦截到登陆页
        // 2. 没有, 拦截到登录页
        if ( isset( $_COOKIE['PHPSESSID'] ) ) {
          // 有 sessionId
          session_start();
          // 尝试获取用户信息
          if ( isset( $_SESSION['user_id'] ) )  {
            // 获取到了啥也不用干
          }
          else {
            header("location: ./logoin.php");
          }
        }
        else {
          // 没有 sessionId 
          header( "location: ./logoin.php" );
        }
    }



?>