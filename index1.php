<?php
    include_once "./fu.php";
    // 文章
    $sql="SELECT COUNT(*) as cont FROM comments";
    $comments= myc($sql);
    // 获赞
    $sql="SELECT love FROM love WHERE id=1";
    $love= myc($sql);
    
    $sql="SELECT COUNT(*) as cont FROM comments";
    $comments= myc($sql);
    // 分类
    $sql="SELECT COUNT(*) as cont FROM categories";
    $categories= myc($sql);
    // 评论
    $sql="SELECT COUNT(*) as cont FROM talk";
    $talk= myc($sql);
   
// $sql="SELECT *  FROM comments";
//     $comments= myc($sql);

// print_r($love[0]['love']);

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./node_modules/mui-master/dist/css/mui.css">
        <link rel="stylesheet" href="./node_modules/nprogress/nprogress.css">
        <link rel="stylesheet" href="./css/index.css">

        <title>Wonder个人网站
        </title>
    </head>

    <body>

        <div class="conter  ">
            <div class="header clear">
                <div class="h-conter">
                    <div class="logo">
                        <a href="./index1.php">Wonder</a>
                        <a class="mui-icon mui-icon-bars" id="select"></a>
                        <div class="selectdow">
                            <ul>
                                <li><a href="./index1.php">首页</a></li>
                                <li><a href="./about.php">关于</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="list ">
                        <ul>
                            <li><a href="./index1.php" class="header-h check">首页</a></li>
                            <li><a href="./about.php">关于</a></li>

                        </ul>

                    </div>
                    <div class="serch ">
                        <i class="icon-serch mui-icon mui-icon-search"></i>
                        <input id="inp" type="text" placeholder="请输入关键词">

                    </div>
                </div>
            </div>
            <div class="main ">
                <div class="gotop mui-icon mui-icon-arrowup"></div>
                <div class="main-r">

                    <div class="new-r">
                        <div class="wzcid">
                            <p>我的名片</p>
                        </div>
                        <div class="wzc-new">
                            <p><a href="http://www.wzci.club" target="_blank">网站:www.wzci.club</a></p>
                            <p><a href="#">邮箱:648800217@qq.com</a></p>
                            <p><a href="https://github.com/648800217">github:https://github.com/648800217</a></p>
                        </div>

                    </div>
                    <div class="new-r">
                        <div class="wzcid">
                            <p>文章总览</p>
                        </div>
                        <div class="categ">
                            <a href="./backindex.php">
                                <p>文章 &nbsp<span>(<?php echo $comments[0]['cont']?>)</span></p>
                            </a>
                            <a href="./backindex.php">
                                <p>评论 &nbsp<span>(<?php echo $talk[0]['cont']?>)</span></p>
                            </a>

                            <a href="./backindex.php">
                                <p>分类 &nbsp<span>(<?php echo $categories[0]['cont']?>)</span></p>
                            </a>
                           

                        </div>
                    </div>
                    <div class="new-r">
                        <div class="wzcid">
                            <p>当前时间</p>
                        </div>
                        <p class="time">
                            <span class="time-1"></span>:
                            <span class="time-2"></span>:
                            <span class="time-3"></span>


                        </p>

                    </div>
                    <div class="new-r">
                        <div class="wzcid">
                            <p>我的微信</p>

                        </div>
                        <div class="img">


                        </div>

                    </div>

                </div>
                <!-- 挖个坑 -->
                <div class="main-l">
                    <!-- <div class="new-l">
                    <h3><a href="./article.html">Code Highlight Style test</a></h3>
                    <p>Make sure all the code blocks highlighted correctly. All the code samples are come from the demo of https://highlightjs.org</p>
                    <span>junchen</span>
                    <span>  2019-07-25  &nbsp&nbsp &nbsp&nbsp16:43:00</span>
                </div> -->

                </div>



            </div>

        </div>

        </div>
        <script src="./node_modules/jquery/dist/jquery.min.js"></script>
        <script src="./node_modules/nprogress/nprogress.js"></script>
        <script src="./node_modules/mui-master/dist/js/mui.js"></script>
        <script src="./node_modules/art-template-master/lib/template-web.js"></script>
        <script src="./js/index.js"></script>
        <!-- // 判断ajax发送前和全部成功执行的函数----------------------------------- -->
        <script>
              $(document).ajaxStart(function() {
             NProgress.start();
         });
         $(document).ajaxStop(function() {
             NProgress.done();
         });
        </script>

        <script type="text/html" id='tpl'>
            {{each data v i}}
            <div class="new-l" >
<!-- 在跳转详情页中携带id---------------------------------- -->
                <h3 data-id='{{v.id}}'><a href="./article.php?id={{v.id}}">{{v.title}}</a></h3>
                <p>{{v.content.substr(0,100)}}.............</p>
                <span>作者:&nbsp&nbsp&nbsp&nbsp{{v.author}}</span>
                <span>发布时间:&nbsp&nbsp&nbsp&nbsp{{v.time}}</span>
            </div>
            {{/each}}

        </script>
        



    </body>

    </html>