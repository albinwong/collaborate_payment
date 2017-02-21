<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>汇盟通宝</title>
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
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
            <div class="login-title">汇盟通宝</div>
        </header>
    
    <div class="weui_tab">
        
    <link href="/work/pay_center/Public/home/css/style/pay.css" type="text/css" rel="stylesheet">
    <script src="/work/pay_center/Public/home/js/js/pay.js" type="text/javascript"></script>
    <div class="weui_tab" style="background:#FFF;">
        <div class="weui_tab_bd">
            <form action="/work/pay_center/index.php/Home/main/settlement" method="post">
                <div class="weui_tab_bd" style="margin-top:60px; margin-bottom:80px;">
                    <?php if($sf != 1): ?><div class="xzqy" flag="1">
                            <p flag='water'>选择代理区域:</p>
                            <select id="prov" name="prov" class="select-sheng">
                                <option value="">请选择</option>
                            </select>
                            <span>省</span>
                            <select  id="city" name="city" class="select-shi">
                                <option value="">请选择</option>
                            </select>
                            <span>市</span>
                            <?php if(($sf == 3) or ($sf == 2)): ?><select id="area"  flag="yy" name="area" class="select-qu">
                                    <option value="">请选择</option>
                                </select>
                                <span>区/县</span><?php endif; ?>
                        </div><?php endif; ?>
                    <?php if($sf != 1): ?><div class="weui_cells weui_cells_radio">
                            <label class="weui_cell weui_check_label">
                                <div class="weui_cell_bd weui_cell_primary" style="font-size:0.8rem;">
                                    <p style="float:left;">你选择的代理区域是：</p>
                                    <p class="dlqy"><span id="sp"></span><span id="sc"></span><span id="sa"></span></p>
                                </div>
                                <div style="display: none;" class="queren">待确认</div>
                            </label>
                        </div><?php endif; ?>
                    <?php if($sf != 1): ?><div class="inquiry">
                            <div class="quiry">
                                <p class="quiry_1" key="<?php echo ($sf); ?>">查询</p>
                                <p class="quiry_2" style="display: none;">该区域还有<span>9</span>名代理资格</p>
                            </div>
                            <table class="sheet">
                                <tbody>
                                    <tr>
                                        <th class="sheet_1">序号</th>
                                        <th class="sheet_2">账号</th>
                                        <th class="sheet_3">姓名</th>
                                        <th class="sheet_4">日期</th>
                                    </tr>
                                    <tr id="list" style="display: table-row;">
                                    </tr>
                                </tbody>
                            </table>
                        </div><?php endif; ?>
                    <div class="subordinate">
                        <?php if($sf == 1): ?><p flag="noid">所属招商中心：</p>
                            <?php else: ?><p>所属招商中心：</p><?php endif; ?>
                        <select class="insubo" name="mc_id">
                            <option value="">请选择</option>
                            <?php if(is_array($mc)): foreach($mc as $key=>$mlist): ?><option value="<?php echo ($mlist["mid"]); ?>"><?php echo ($mlist["name"]); ?></option><?php endforeach; endif; ?>
                        </select>
                    </div>
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
                //遍历数据进行添加
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
            var prov = 0;
            var PROV = false;
            var city = 0;
            var CITY = false;
            var ZSZ = false;
            var SC = true;
            var YY = true;
            var service = $('select[name=area]').attr('flag');
            if($('.queren').text()){
                var DLQ = false;
                $('.queren').click(function(){
                    var abc = $(this).text();
                    if(abc == '待确认'){
                        $(this).text('已确认');
                        DLQ = true;
                    }else{
                        $(this).text('待确认');
                        DLQ = false;
                    }
                });
            };
            $('select[name=prov]').change(function(){
                prov = $(this).val();
                $('#sp').text($(this).find("option:selected").text());
                $('#sc').empty();
                $('#sa').empty();
                DLQ = false;
                if(prov){
                    PROV = true;
                }else{
                    PROV = false;
                }
                CITY = false;
                if(service){
                    AREA = false; 
                }
            });


            $('select[name=city]').change(function(){
                city = $(this).val();
                if(city == 267){
                    $('.quiry_1').click(function(){
                        var idf = $(this).attr('key')
                         if(idf == 4){
                            $('#list').empty().append('<td>1</td><td>13102351337</td><td>胡蔁蓉</td><td>2017-02-13</td>');
                            YY = false;
                        }else if(idf == 2){
                            $('#list').empty().append('<td>1</td><td>13983702170</td><td>徐燕</td><td>2017-02-13</td>');
                        }
                    });
                }
                $('#sc').text($(this).find("option:selected").text());
                $('#sa').empty();
                $('.queren').css('display','block').text('待确认');
                DLQ = false;
                if(city){
                    CITY = true;
                }else{
                    CITY = false;
                }
                if(service){
                    AREA = false; 
                }
                var yy  = $('.quiry_1').attr('key');
                if(yy == 4 && city == 267){
                    YY = false;
                }else{
                    YY = true;
                }
            });
            if(service){
                var area = 0;
                var AREA = false;
                $('select[name=area]').change(function(){
                    area = $(this).val();
                    if(city == 231){
                        $('.quiry_1').click(function(){
                            if($(this).attr("key") == 3){
                                $('#list').empty().append('<td>1</td><td>15992767065</td><td>白红钊</td><td>2017-02-13</td>');
                                SC = false;
                            }
                        });
                    }
                    $('.queren').css('display','block').text('待确认');
                    DLQ = false;
                    $('#sa').text($(this).find("option:selected").text());
                    if(area){
                        AREA = true;
                    }else{
                        AREA = false;
                    }

                    var sc  = $('.quiry_1').attr('key');
                    // alert(sc);
                    // alert(area);
                    if(sc == 3 && area == 2136){
                        SC = false;
                    }else{
                        SC = true;
                    }
                });
            }
            $('select[name=mc_id]').change(function(){
                var mc = $(this).val();
                if(mc){
                    ZSZ = true;
                }else{
                    ZSZ = false;
                }
            });
            $('form').submit(function(){
                if(!service){
                    AREA = true;
                }
                if(!DLQ){
                    DQL = true;
                }
                if($('.subordinate p:nth-child(1)').attr('flag')){
                    PROV = true;
                    CITY = true;
                    DLQ = true;
                };
                if(PROV && CITY && AREA && DLQ && ZSZ && SC && YY){
                    return true;
                }else{
                    return false;
                }
            });
    });
    </script>

        
    </div>
</body>
</html>