<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        body{
            background-color: cadetblue  ;
            text-align: center;
        }
        #d1{
            letter-spacing:25px;
            margin-top: 45px;
            font-size: 80px;
            color: lightskyblue;
        }
        #d2{
            color: #b1d3c5;
            margin-top: 60px;
            font-size: 40px;

        }
        #d3{
            color: #b1d3c5;
            margin-top: 20px;
            font-size: 40px;
        }
        button{
            margin-top: 35px;
            background: antiquewhite;
            width: 150px;
            height: 40px;
        }
        .bt{
            background-color:lightblue;
        }
    </style>
</head>
<body>

  <div  id="d1">总成绩</div>

  <div  id="d2">用户：<?php echo (cookie('user_id')); ?></div>
<div  id="d3">成绩：<?php echo ($grade); ?></div>
    <button  class="bt"  onclick="btbt()">退出</button>

</body>
</html>
<script language="javascript">
    //防止页面后退
    history.pushState(null, null, document.URL);
    window.addEventListener('popstate', function () {
        history.pushState(null, null, document.URL);
    });

    function  btbt() {
        window.location.href="<?php echo U('Login/exitLogin');?>";
    }
</script>