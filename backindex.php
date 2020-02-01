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
    <link rel="stylesheet" href="./css/backarticle.css">
    <link rel="stylesheet" href="./css/article.css">
    <link rel="stylesheet" href="./css/backindex.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row main">
            <div class="l ">
                <div class="l-header text-center ">Wonder</div>
                <div class="l-logo  text-center m-auto">
                    logo
                </div>
                <div class="l-mainlist">
                    <ul>
                        <li><a href="./backindex.php">首页</a></li>
                        <li><a href="./backarticle.php">文章列表</a></li>




                        <li><a href="./addarticle.html">文章添加</a></li>

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
                        <li class="text-center"><a href="">后台管理</a></li>
                        <li class="text-right"><a href="">欢迎<span>wzc</span></a></li>

                    </ul>

                </div>

                <div class="main-conater">
                    <ul class="clearfix">
                        <li class="col-lg-3 col-md-6 col-xs-12">
                            <span class="main-l">评论</span>
                            <span class="main-l">20kk</span>

                        </li>
                        <li class="col-lg-3 col-md-6 col-xs-12">
                            <span class="main-l">分类</span>
                            <span class="main-l">20kk</span>

                        </li>
                        <li class="col-lg-3 col-md-6 col-xs-12">
                            <span class="main-l">文章</span>
                            <span class="main-l">20kk</span>

                        </li>
                        <li class="col-lg-3 col-md-6 col-xs-12">
                            <span class="main-l">获赞</span>
                            <span class="main-l">20kk</span>

                        </li>

                    </ul>
                </div>
                <div id="main"></div>
            </div>


        </div>
    </div>
    </div>

    <script src="./node_modules/echarts/dist/echarts.min.js"></script>
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./node_modules/nprogress/nprogress.js"></script>

    <script>
        NProgress.start();
        setTimeout(function() {

            NProgress.done();
        }, 2000)
    </script>
    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('main'));

        // 指定图表的配置项和数据
        option = {
            color: ['#3398DB'],
            tooltip: {
                trigger: 'axis',
                axisPointer: { // 坐标轴指示器，坐标轴触发有效
                    type: 'shadow' // 默认为直线，可选为：'line' | 'shadow'
                }
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            xAxis: [{
                type: 'category',
                data: ['评论', '分类', '文章', '获赞'],
                axisTick: {
                    alignWithLabel: true
                }
            }],
            yAxis: [{
                type: 'value'
            }],
            series: [{
                name: '直接访问',
                type: 'bar',
                barWidth: '60%',
                data: [10, 52, 200, 334, 390, 330, 220]
            }]
        };


        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
        window.onresize = function() {
            myChart.resize();
            //myChart1.resize();    //若有多个图表变动，可多写

        }
    </script>
</body>

</html>