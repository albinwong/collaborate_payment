<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>合作缴费</title>
<meta name="viewport" content="width=divice-width minimum-scale=1.0 maximum-scale=1.0 user-scalable=no"/>
<link href="/work/pay_center/Public/home/css/layer.css" type="text/css" rel="stylesheet">
<link href="/work/pay_center/Public/home/css/order.css" type="text/css" rel="stylesheet">
<link href="/work/pay_center/Public/home/css/swiper-3.4.1.min.css" type="text/css" rel="stylesheet">
<link href="/work/pay_center/Public/home/css/weui.css" type="text/css" rel="stylesheet">
<link href="/work/pay_center/Public/home/css/common.css" type="text/css" rel="stylesheet">
<link href="/work/pay_center/Public/home/css/style/throughsetting.css" type="text/css" rel="stylesheet">
<link href="/work/pay_center/Public/home/css/style/index.css" type="text/css" rel="stylesheet">
<script src="/work/pay_center/Public/home/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="/work/pay_center/Public/home/js/swiper-3.4.1.min.js" type="text/javascript"></script>
<script src="/work/pay_center/Public/home/js/layer.js" type="text/javascript"></script>
<script src="/work/pay_center/Public/home/js/order.js" type="text/javascript"></script>
</head>
<body>
    
        <header>
            <div class="pull-left" onclick="window.history.back()">
            <img class="icon-rotate fa fa-rotate-left" src="/work/pay_center/Public/home/img/Arrow.png"/>
            </div>
            <div class="shuaxin" onclick="window.history.go(0)">
                <img class="icon-rotate fa fa-rotate-left" src="/work/pay_center/Public/home/img/new.png"/>
            </div>
            <div class="login-title">合作缴费</div>
        </header>
    
    <div class="weui_tab">
        
    <link href="/work/pay_center/Public/home/css/style/pay.css" type="text/css" rel="stylesheet">
    <div class="weui_tab" style="background:#FFF;">
        <div class="weui_tab_bd">
            <form action="/work/pay_center/index.php/Home/index/rec" method="post">
                <div class="weui_tab_bd" style="margin-top:60px; margin-bottom:80px;">
                    <?php if($sf > 2): ?><div class="xzqy">
                            <p flag='water'>选择代理区域:</p>
                            <select id="prov" name="prov" class="select-sheng">
                                <option value="">请选择</option>
                            </select>
                            <span>省</span>
                            <select  id="city" name="city" class="select-shi">
                                <option value="">请选择</option>
                            </select>
                            <span>市</span>
                            <select id="area" name="area" class="select-qu">
                                <option value="">请选择</option>
                            </select>
                            <span>区/县</span>
                        </div><?php endif; ?>
                    <div class="subordinate">
                        <p>所属招商中心：</p>
                        <select class="insubo" name="mc_id">
                            <?php if(is_array($mc)): foreach($mc as $key=>$mlist): ?><option value="<?php echo ($mlist["mid"]); ?>"><?php echo ($mlist["name"]); ?></option><?php endforeach; endif; ?>
                        </select>
                    </div>
                    <?php if($sf > 2): ?><div class="weui_cells weui_cells_radio">
                        <label class="weui_cell weui_check_label">
                            <div class="weui_cell_bd weui_cell_primary" style="font-size:0.8rem;">
                                <p style="float:left;">你选择的代理区域是：</p>
                                <p><span id="sp"></span><span id="sc"></span><span id="sa"></span></p>
                            </div>
                            <div class="weui_cell_ft">
                                <input type="checkbox" class="weui_check">
                                <span class="weui_icon_checked"></span>
                            </div>
                        </label>
                        </div><?php endif; ?>
                    <input class="weui_btn weui_btn_warn" style="width:80%;text-align:center;" value="确认" type="submit">
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript">
    $(function(){
    //选择代理区域
        $('#prov').click(function(){
            $.get("/work/pay_center/index.php/Home/index/address",{'pid':0},function(data){
                // 遍历数据进行添加
                for(var i=0;i<data.length;i++){
                var op = $('<option value="'+data[i].areaid+'">'+data[i].areaname+'</option>');
                $('#prov').append(op);
                }
            },'json');
        });
        $('#prov').change(function(){
            // 获取当前省的id
            var pid = $(this).val();
            // 通过省的id去获取市的内容
            $.get("/work/pay_center/index.php/Home/index/address",{'pid':pid},function(data){
                $('#city').empty().html('<option value="">请选择</option>');
                $('#area').empty().html('<option value="">请选择</option>');
                // 遍历数据进行添加
                for(var i=0;i<data.length;i++){
                   var op = $('<option value="'+data[i].areaid+'">'+data[i].areaname+'</option>');
                    $('#city').append(op);
                }
            },'json');
            $('input[name=detail]').removeAttr('disabled');
        });
        $('#city').change(function(){
            // 获取当前省的id
            var pid = $(this).val();
            // 通过省的id去获取市的内容
            $.get("/work/pay_center/index.php/Home/index/address",{'pid':pid},function(data){
                $('#area').empty().html('<option value="">请选择</option>');
                // 遍历数据进行添加
                for(var i=0;i<data.length;i++){
                    var op = $('<option value="'+data[i].areaid+'">'+data[i].areaname+'</option>');
                    $('#area').append(op);
                }
            },'json');
        });
    //表单限制
        var flag = $('.xzqy p').attr('flag');
        if(flag){
            var prov = 0;
            var PROV = false;
            var city = 0;
            var CITY = false;
            var area = 0;
            var AREA = false;
            var DLQ = false;
            $('select[name=prov]').change(function(){
                prov = $(this).val();
                $('#sp').text($(this).find("option:selected").text());
                $('#sc').empty();
                $('#sa').empty();
                if(prov){
                    PROV = true;
                }else{
                    PROV = false;
                }
                CITY = false;
                AREA = false;
            });
            $('select[name=city]').change(function(){
                city = $(this).val();
                $('#sc').text($(this).find("option:selected").text());
                $('#sa').empty();
                if(city){
                    CITY = true;
                }else{
                    CITY = false;
                }
                AREA = false;
            });
            $('select[name=area]').change(function(){
                area = $(this).val();
                $('#sa').text($(this).find("option:selected").text());
                if(area){
                    AREA = true;
                }else{
                    AREA = false;
                }
            });
            $('label p:nth-child(2)').click(function(){
                var dlq = $('input[class=weui_check]').is(':checked');
                if(!dlq){
                    DLQ = true;
                }else{
                    DLQ = false;
                }
            });
            $('form').submit(function(){
                // $('input').trigger('blur');
                if(PROV && CITY && AREA && DLQ){
                    return true;
                }else{
                    return false;
                }
            });
        }
    });
    </script>

        
    </div>
</body>
</html>