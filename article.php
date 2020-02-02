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
$id=$_GET['id'];
// echo $id;

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
    <link rel="stylesheet" href="./css/article.css">

    <title>Wonder个人网站</title>
</head>

<body>

    <div class="conter" data-id='<?php echo $id ?>'>
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
                        <span></span>:
                        <span></span>:
                        <span></span>


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
            <div class="main-l">
                <!-- 挖个坑-------------------------------------- -->
                <!-- <div class="new-l">


                    <h3>这是标题</h3>
                    <div class="actor">
                        <span>作者:  <span>王之川  </span></span>
                        <span>更新时间:<span>2019-1-2  13:26:36</span></span>
                        
                        </span>
                    </div>
                    <div class="content">
                        <div class="img">
                            <img src="./uploads/wallpaper-2572384.jpg" alt="图片">
                        </div>

                        <div class="content-m">
                            忙的时候，想要休息； 度假的时候，想到未来。 穷的时候，渴望富有； 生活安逸了，怕幸福不能长久。 该决定的时候，担心结果不如预期； 看明白了，后悔当初没有下定决心。 不属于自己的，常常心存欲望； 握在手里了，又怀念未拥有前的轻松。 生命若不是现在，那是何时？ 一个人可以毫无道理跟你做一辈子亲戚,但 一个人不会毫无道理跟你做一辈子朋友 我会想起与你们认识的种种. 也会想起发生过的点点滴滴. 直到我们都年老时是否会像现在这样坐在电脑前互诉心声？ 不管如何,希望我们永远是真诚相对的朋友(知己) 朋友就是喜欢你也了解你的人
                            你面对人生挫折时，一直紧握你那双手 你好吗？ 你能够看到他是你与他的缘份 你能够和你身边的人做朋友也是你与他的缘份 纵使你不知道这颗流星会何时消失 但如若你好好珍惜看到这流星的每一刻 那就算流星走了你也不会后悔 请大家好好珍惜身边的每一个人 珍惜这段友谊！ 建立友谊如像种树，因为友谊是一株树 (TREE): T:Trust(信任) R:Respect(尊重) E:Exchange(交流) E:Emotional Support(精神支持) 朋友就是无形中伴你走过风雨，永远支持你的力量
                            朋友就是一种无法言喻的美好感觉 朋友就是在别人面 前永远护著你的那个人 朋友就是即使是一点小感动，一点小事情都想一起分享 朋友就是当你抱头痛哭的时候，扶著你肩膀的那个人 朋友就是当你面对人生挫折时，一直紧握你的那双手 喜欢下雨，因为你不会知道我流泪……
                        </div>

                        <div class="img">
                            <img src="./uploads/wallpaper-2572384.jpg" alt="图片">
                        </div>
                        <div class="content-m">
                            忙的时候，想要休息； 度假的时候，想到未来。 穷的时候，渴望富有； 生活安逸了，怕幸福不能长久。 该决定的时候，担心结果不如预期； 看明白了，后悔当初没有下定决心。 不属于自己的，常常心存欲望； 握在手里了，又怀念未拥有前的轻松。 生命若不是现在，那是何时？ 一个人可以毫无道理跟你做一辈子亲戚,但 一个人不会毫无道理跟你做一辈子朋友 我会想起与你们认识的种种. 也会想起发生过的点点滴滴. 直到我们都年老时是否会像现在这样坐在电脑前互诉心声？ 不管如何,希望我们永远是真诚相对的朋友(知己) 朋友就是喜欢你也了解你的人
                            愿你都能珍惜身边每一个朋友 因为你我有缘份，才能成为朋友 可以成为知己的，更难得！ 时间未必是你我成为知己的原因 但一定可以证明到 你对朋友的关怀不是白费！ 希望您永远都系我的好朋友！ 朋友，是你高兴时想跟他分享的， 朋友，是你不高兴时可以给你发脾气的， 朋友，也是在你没钱开饭时打救你的， 朋友，你闷得发慌时可以跟你一同发慌的， 朋友，会甘愿给功课你抄，跟你一同出猫一同被人罚的， 朋友，也是你买手信时，想买一份大的给他的， 朋友，也是你看见他上线时！
                            是一种无法言喻的美好感觉 朋友就是在别人面 前永远护著你的那个人 朋友就是即使是一点小感动，一点小事情都想一起分享 朋友就是当你抱头痛哭的时候，扶著你肩膀的那个人 朋友就是当你面对人生挫折时，一直紧握你的那双手 喜欢下雨，因为你不会知道我流泪……
                        </div>
                        <div class="img">
                            <img src="./uploads/wallpaper-2572384.jpg" alt="图片">
                        </div>
                        <div class="ok-conter">
                            <div class="conten-ok"><a href="">我觉得不错 <span>(20)</span></a></div>
                            <div class="goback"><a href="./index.html">返回首页</a></div>
                        </div>
                    </div>

                </div> -->




            </div>

        </div>

    </div>
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
        <script src="./node_modules/nprogress/nprogress.js"></script>
        <script src="./node_modules/mui-master/dist/js/mui.js"></script>
        <script src="./node_modules/art-template-master/lib/template-web.js"></script>
        <script src="./js/index.js"></script>>
       <script src="./js/article.js"></script>

    <script>
         $(document).ajaxStart(function() {
             NProgress.start();
         });
         $(document).ajaxStop(function() {
             NProgress.done();
         });
        </script>

   <script type='text/html' id='tpl'>
       {{each data v i}}
       <div class="new-l">


    <h3>{{v.title}}</h3>
    <div class="actor">
    <span>作者:  <span>{{v.author}} </span></span>
    <span>更新时间:<span>{{v.time}}</span></span>
    
    </span>
</div>
<div class="content">
    <div class="img">
        <img src="./uploads/wallpaper-2572384.jpg" alt="图片">
    </div>

    <div class="content-m">
        {{v.content}}
    </div>

    
   
  
    <div class="ok-conter">
        <div class="conten-ok"><a href="">我觉得不错 <span>{{v.love}}</span></a></div>
        <div class="goback"><a href="./index1.php">返回首页</a></div>
    </div>
</div>

</div>
{{/each}}
   </script>




</body>

</html>