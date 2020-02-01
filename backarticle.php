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
                    <div class="logo-out btn btn-danger ">退出登录</div>

                </div>
            </div>
            <div class="r">
                <div class="r-header  clearfix">
                    <ul class="clearfix">
                        <li class=" logo-h1">
                            <a href="" class="glyphicon glyphicon-align-justify"></a>
                        </li>
                        <li class="text-center"><a href="">文章列表</a></li>
                        <li class="text-right"><a href="">欢迎<span>wzc</span></a></li>

                    </ul>
                    <!-- ============== -->

                    <div id="box"></div>

                    <div class=" table-responsive table ">
                        <table class="table table-bordered table-hover ">
                            <thead>
                                <tr>
                                    <th class="text-center "> ID</th>
                                    <th>标题</th>
                                    <th>作者</th>
                                    <th>分类</th>
                                    <th class="text-center ">发表时间</th>
                                    <th class="text-center ">状态</th>
                                    <th class="text-center " width="100 ">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center ">1</td>
                                    <td>随便一个名称</td>
                                    <td>小小</td>
                                    <td>潮科技</td>
                                    <td class="text-center ">2016/10/07</td>
                                    <td class="text-center ">已发布</td>
                                    <td class="text-center ">
                                        <a href="javascript:; " class="btn btn-danger btn-xs ">删除</a>
                                        <a href="javascript:; " class="btn btn-success btn-xs ">编辑</a></td>
                                    </td>


                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>





            </div>
        </div>
    </div>

    <script src="./node_modules/echarts/dist/echarts.min.js "></script>
    <script src="./node_modules/jquery/dist/jquery.min.js "></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./node_modules/nprogress/nprogress.js "></script>
    <script src="./node_modules/bootstrap-paginator-master/jquery.pagination.js "></script>
    <script src="./js/backarticle.js "></script>

    <script>
        NProgress.start();
        setTimeout(function() {

            NProgress.done();
        }, 2000)
    </script>

</body>

</html>