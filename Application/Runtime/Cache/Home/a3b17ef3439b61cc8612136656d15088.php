<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>考试系统</title>
    <style>
        body{
            background-color: #01aafd;
            text-align: center;
        }

        #d2{
            margin-top: 150px;
            font-size: 60px;
            letter-spacing:25px;
            color:steelblue;
        }
        #d3{
            margin-top: 80px;
              font-size: 40px;
            color:#0c2f86;
        }
        #d4{
            margin-top: 35px;
            font-size: 40px;
            color:#0c2f86;
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
<div id="d1">

<div  id="d2">欢迎进入考试系统</div>
<div id="d3">用户：<?php echo (cookie('user_true')); ?></div>
<div id="d4">考试时间：<?php echo ($tim['timespan']); ?>分钟</div>

<button  class="bt" id="b1" onclick="bt()">开始答题</button>
    <button   class="bt" id='bt'  onclick="pwd()">修改密码</button>
<div  id="fm">
    <form action="<?php echo U('pwd');?>" method="post">
        <input type="hidden" name="id" value="<?php echo (cookie('user_id')); ?>">
       <input type="text" name="password"  id="new"   placeholder="新密码">
        <input type="submit" value="确定">
    </form>
</div>
<button  class="bt"  onclick="btbt()">退出</button>


</div>
</body>
</html>
<script type="text/javascript" src="/Public/css/jquery-1.11.1.js"></script>

<script language="JavaScript">

function  bt(){

if(<?php echo (session('use_pici')); ?>==1){
        alert('该用户已作答');
        return false;
    }else{
        window.location.href="<?php echo U('Index/index');?>";
    }
}

    function  btbt() {
        window.location.href="<?php echo U('Login/exitLogin');?>";
    }
</script>
<script language="javascript">
    //防止页面后退
    history.pushState(null, null, document.URL);
    window.addEventListener('popstate', function () {
        history.pushState(null, null, document.URL);
    });




    $(document).ready(function(e) {
        $("#bt").click(function(e) {
            $("#fm").toggle();
        });
    });


    $(function () {
        $("#fm").hide();
    });
 /*   function   ab(url,id){
        var pwd=$('#new').val();
        $.ajax({
            type:'POST',
            dataType:'json',
            url:url,
            data:{id:id,pwd:pwd},
            success:function (data) {

                alert('修改成功');
                $("input[type='text']").attr('type','hidden');
                pwd='';
            },error:function (data) {

            }
        })
    }*/
</script>