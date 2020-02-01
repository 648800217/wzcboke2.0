<?php
include_once './fu.php';
islogoin();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./node_modules/nprogress/nprogress.css">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./node_modules/bootstrap-paginator-master/pagination.css">
    <link rel="stylesheet" href="./css/backindex.css">
    <link rel="stylesheet" href="./css/backarticle.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row main">
            <div class="l">
                <div class="l-header text-center ">Wonder</div>
                <div class="l-logo m-auto text-center ">
                    logo
                </div>

                <div class="l-mainlist">

                    <ul>
                        <li><a href="./backindex.php">首页</a></li>
                        <li><a href="./backarticle.php">文章列表</a></li>




                        <li><a href="./addarticle.php">文章添加</a></li>

                    </ul>
                    <div class="logo-out btn btn-danger">退出登录</div>

                </div>
            </div>
            <div class="r">
                <div class="r-header  clearfix">
                    <ul class="clearfix">
                        <li class=" logo-h1">
                            <a href="" class="glyphicon glyphicon-align-justify"></a>
                        </li>
                        <li class="text-center"><a href="">文章添加</a></li>
                        <li class="text-right"><a href="">欢迎<span>wzc</span></a></li>

                    </ul>
                    <!-- ============== -->

                    <div class="container-fluid">
                        <div class="page-title">
                            <h1>写文章</h1>
                        </div>
                        <!-- 有错误信息时展示 -->
                        <!-- <div class="alert alert-danger">
                          <strong>错误！</strong>发生XXX错误
                        </div> -->
                        <form action="" class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="title">标题:</label>
                                    <input type="text" class="form-control input-lg " name="title" id="title" placeholder="请输入标题">
                                </div>
                                <div class="form-group">
                                    <label for="center">内容:</label>
                                    <textarea name="" id="center" cols="30" rows="20" placeholder="请输入内容" class="form-control input-lg"></textarea>
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="img">上传图片:</label>
                                    <input type="file" class="form-control " id="img" placeholder="请输入标题">
                                    <div class="img" style="width: 100px ;height: 100px;border:1px solid rgb(192, 185, 185);"></div>
                                </div>
                                <div class="form-group">
                                    <label for="category">分类:</label>
                                    <select id="category" class="form-control" name="category">
                                        <option value="1">未分类</option>
                                        <option value="2">潮生活</option>
                                      </select>
                                </div>
                                <div class="form-group">
                                    <label for="time">发布时间:</label>
                                    <input type="datetime-local" class="form-control " name="title" id="time" placeholder="请输入标题">
                                </div>
                                <button class="btn btn-success" type="submit">发布文章</button>
                            </div>



                        </form>



                        </form>
                    </div>


                </div>





            </div>
        </div>
    </div>

    <script src="./node_modules/jquery/dist/jquery.min.js "></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./node_modules/nprogress/nprogress.js "></script>


    <script>
        NProgress.start();
        setTimeout(function() {

            NProgress.done();
        }, 2000)
    </script>

</body>

</html>