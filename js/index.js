     $(function() {
         mui.init({




             })
             // 调取time

         var data = new Date()
         var s = data.getHours()
         var f = data.getMinutes()
         var m = data.getSeconds()
         if (f < 10) {
             f = '0' + f
         }
         if (s < 10) {
             s = '0' + s
         }
         if (m < 10) {
             m = '0' + m
         }
         $('.time span:nth-child(1)').text(s)
         $('.time span:nth-child(2)').text(f)
         $('.time span:nth-child(3)').text(m)
         gettime();
         gettop();
         //点击logo下拉二级框----------------------------------
         $('#select').on('tap', function() {

                 $('#select').stop().toggleClass('rotate')
                 $('.selectdow').stop().slideToggle(500);




                 console.log('1111')
                 return false

             })
             // 监听scoll改goup------------------------------------------
         function gettop() {
             $('.icon-serch').on('tap', function() {
                 // console.log('111')
                 $('#inp').stop().toggle(500);
             })
             $(window).on('scroll', function() {
                 var i = $(window).scrollTop();
                 // console.log(i)
                 if (i > 350) {
                     $('.gotop ').stop().fadeIn(500);
                     $('.gotop ').on('tap', function() {
                         // 滚动到顶部：
                         $('html,body').stop().animate({
                             scrollTop: 0,
                         }, 1000);
                         // console.log(i)
                     })
                 } else {
                     $('.gotop ').stop().fadeOut(500)

                 }

             })
         }
         // 获取时间----------------------------------------------------
         function gettime() {
             var time = setInterval(function() {
                 var data = new Date()
                 var s = data.getHours()
                 var f = data.getMinutes()
                 var m = data.getSeconds()
                 if (f < 10) {
                     f = '0' + f

                 }
                 if (s < 10) {
                     s = '0' + s

                 }
                 if (m < 10) {
                     m = '0' + m

                 }
                 $('.time span:nth-child(1)').text(s)
                 $('.time span:nth-child(2)').text(f)
                 $('.time span:nth-child(3)').text(m)
                     // console.log('111')
             }, 1000)
         }
         // gettime()

         // 头部栏的显示隐藏------------------------------------
         var h_is = 60
         $(window).on('scroll', function() {
             var h_i = $(window).scrollTop();

             // console.log(h_i)
             if (h_i > 60) {
                 $('.header').stop().fadeOut(200)
             } else {
                 $('.header').stop().fadeIn(200)

             }
         });




     })