<?php if (!defined('THINK_PATH')) exit();?><html>
<head>

    <title></title>
    <meta charset="UTF-8">
    <meta name="save" content="history">
    <link rel="stylesheet" type="text/css" href="/Public/css/index.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/css/reset.css"/>
    <style>
        * {
            padding: 0;
            margin: 0;
            border: 0;
            list-style: none;
        }
    </style>
</head>
<body   >
<div class="biaoti">
    <h2>
        考试系统
    </h2>
    <div class="user1">用户：<?php echo (cookie('user_true')); ?> <span class="time" id="timer"><?php echo ($pici['timespan']); ?>分钟</span>
        <input value="提交"  onclick="su()" class="sub" type="button">
    </div>
</div>
<div class="clearfix"></div>
<div class="con">
    <form action="<?php echo U('Index/sub');?>" method="post" id="myform" onsubmit="aaa()">
        <div class="box">
            <input type="hidden" name="userid" value="<?php echo (cookie('user_id')); ?>">
            <input type="hidden" name="pici" value="<?php echo ($pici['pici']); ?>">
            <div class="one">第一大题 单选题（共<?php echo ($config[0]['amount']); ?>题，每题<?php echo ($config[0]['score']); ?>分，共
                <?php echo $config[0]['amount'] * $config[0]['score'] ?>
                分）
            </div>
            <?php if(is_array($radio)): $i = 0; $__LIST__ = $radio;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="vc"><h4 class="one-h4">&nbsp;<?php echo ($i); ?>：<?php echo ($vo["title"]); ?></h4>
                    <ul>
                        <li>&nbsp;&nbsp;<input name="1_<?php echo ($vo["id"]); ?>" value="1" type="radio" id="rdio1_1_1"><label
                                for="rdio1_1_1">&nbsp;A.</label><?php echo ($vo["op1"]); ?>
                        </li>
                        <li>&nbsp;&nbsp;<input name="1_<?php echo ($vo["id"]); ?>" value="2" type="radio" id="rdio1_1_2"><label
                                for="rdio1_1_2">&nbsp;B.</label><?php echo ($vo["op2"]); ?>
                        </li>
                        <li>&nbsp;&nbsp;<input name="1_<?php echo ($vo["id"]); ?>" value="3" type="radio" id="rdio1_1_3"><label
                                for="rdio1_1_3">&nbsp;C.</label><?php echo ($vo["op3"]); ?>
                        </li>
                        <li>&nbsp;&nbsp;<input name="1_<?php echo ($vo["id"]); ?>" value="4" type="radio" id="rdio1_1_4"><label
                                for="rdio1_1_4">&nbsp;D.</label><?php echo ($vo["op4"]); ?>
                        </li>
                    </ul>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="box">
            <div class="one">第二大题 多选题（共<?php echo ($config[1]['amount']); ?>题，每题<?php echo ($config[1]['score']); ?>分，共
                <?php echo $config[1]['amount'] * $config[1]['score'] ?>
                分 多选或少选均不得分）
            </div>
            <?php if(is_array($checkbox)): $i = 0; $__LIST__ = $checkbox;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="vc"><h4>&nbsp;<?php echo ($i); ?>：<?php echo ($vo["title"]); ?></h4>
                    <ul>
                        <li>&nbsp;&nbsp;<input name="2_<?php echo ($vo["id"]); ?>[]" value="1" type="checkbox" id="check1_2_1"><label
                                for="check1_2_1">&nbsp;A.</label><?php echo ($vo["op1"]); ?>
                        </li>
                        <li>&nbsp;&nbsp;<input name="2_<?php echo ($vo["id"]); ?>[]" value="2" type="checkbox" id="check1_2_2"><label
                                for="check1_2_2">&nbsp;B.</label><?php echo ($vo["op2"]); ?>
                        </li>
                        <li>&nbsp;&nbsp;<input name="2_<?php echo ($vo["id"]); ?>[]" value="3" type="checkbox" id="check1_2_3"><label
                                for="check1_2_3">&nbsp;C.</label><?php echo ($vo["op3"]); ?>
                        </li>
                        <li>&nbsp;&nbsp;<input name="2_<?php echo ($vo["id"]); ?>[]" value="4" type="checkbox" id="check1_2_4"><label
                                for="check1_2_4">&nbsp;D.</label><?php echo ($vo["op4"]); ?>
                        </li>
                        <li>&nbsp;&nbsp;<input name="2_<?php echo ($vo["id"]); ?>[]" value="5" type="checkbox" id="check1_2_5"><label
                                for="check1_2_5">&nbsp;E.</label><?php echo ($vo["op5"]); ?>
                        </li>
                        <li>&nbsp;&nbsp;<input name="2_<?php echo ($vo["id"]); ?>[]" value="6" type="checkbox" id="check1_2_6"><label
                                for="check1_2_6">&nbsp;F.</label><?php echo ($vo["op6"]); ?>
                        </li>
                    </ul>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="box">
            <div class="one">第三大题 判断题（共<?php echo ($config[2]['amount']); ?>题，每题<?php echo ($config[2]['score']); ?>分，共
                <?php echo $config[2]['amount'] * $config[2]['score'] ?>
                分）
            </div>
            <?php if(is_array($panduan)): $i = 0; $__LIST__ = $panduan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="vc"><h4>&nbsp;<?php echo ($i); ?>：<?php echo ($vo["title"]); ?></h4>
                    <ul>
                        <li style="float: left">
                            &nbsp;&nbsp;&nbsp;<input name="3_<?php echo ($vo["id"]); ?>" value="1" type="radio" id="panduan1_1_1"><label
                                for="panduan1_1_1">&nbsp;对</label><?php echo ($vo["op1"]); ?>
                        </li>
                        <li>&nbsp;&nbsp;&nbsp;<input name="3_<?php echo ($vo["id"]); ?>" value="2" type="radio" id="panduan1_1_2"><label
                                for="panduan1_1_2">&nbsp;错</label><?php echo ($vo["op2"]); ?>
                        </li>
                    </ul>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>

        </div>

        <div class="tijiao"><input value="提交" onclick="su()" class="sub" id="sub" type="button"></div>
    </form>
</div>
</body>
</html>
<script type="text/javascript" src="/Public/css/jquery-1.11.1.js"></script>
<script type="text/javascript" src="/Public/css/jquery.cookie.js"></script>

<script language="javascript">
    //提交按钮
    function su() {

        var radio = $("input[type='radio']:checked").length;

        var checkbox = <?php echo ($config[1]['amount']); ?>;
//应答总数
        var length = <?php echo ($config[0]['amount']); ?> + <?php echo ($config[1]['amount']); ?> + <?php echo ($config[2]['amount']); ?>;
        //实际至少答
        var user_length = radio + checkbox;
        var sp = $('#timer').text();

        if (sp != 0) {

            if (radio < <?php echo ($config[0]['amount']); ?> + <?php echo ($config[2]['amount']); ?>) {
                alert('尚有题未做完，请稍后提交');
            }
         else   if (user_length < length) {
                alert('尚有题未做完，请稍后提交');
            }
            else {

                var formElement = document.forms[0];
                formElement.submit();
            }

        }

    }

    /*禁止刷新+后退*/
    document.onkeydown = function () {
        if (event.keyCode == 116) {
            event.keyCode = 0;
            event.returnValue = false;
        }
    };
    document.oncontextmenu = function () {
        event.returnValue = false;
    };


</script>

<script language="javascript">
    //防止页面后退
    history.pushState(null, null, document.URL);
    window.addEventListener('popstate', function () {
        history.pushState(null, null, document.URL);
    });
</script>

<script>
    if(!($.cookie('time'))){
        var a=<?php echo ($pici['timespan']); ?>;
        $.cookie('time',<?php echo ($pici['timespan']); ?>*60 );
        settime();
    }else{
            settime();
    }
    function settime(){

        if ($.cookie('time') == 0) {
            alert('考试时间结束');
           /* clearInterval(resend);*/
            var formElement = document.forms[0];
            formElement.submit();
            $.cookie('time',null);
            return;
        } else {
            msg = "距离考试结束还有" + Math.floor($.cookie('time')/60) + "分" + $.cookie('time')%60 + "秒";
            document.getElementById("timer").innerHTML = msg;
            $.cookie('time',$.cookie('time')-1);

        }
        setTimeout("settime()",1000);
    }
</script>