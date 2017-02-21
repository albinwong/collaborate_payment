<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>合作缴费</title>
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
            <div class="login-title">保险超市<span>（服务商）</span></div>
        </header>
    
    <div class="weui_tab">
        
    <link href="/work/pay_center/Public/home/css/style/pay.css" type="text/css" rel="stylesheet">
    <script src="/work/pay_center/Public/home/js/js/pay.js" type="text/javascript"></script>
<div class="weui_tab" style="background:#FFF;">
    <div class="weui_tab_bd">
        <form action="/work/pay_center/index.php/Home/insurance/settlement" method="post">
            <div class="weui_tab_bd" style="margin-top:60px; margin-bottom:80px;">
                <div class="xzpp">选择品牌:
                    <select id="brand" name="brand">
                        <option value="">请选择</option>
                        <?php if(is_array($bd)): foreach($bd as $key=>$db): ?><option value="<?php echo ($db["iid"]); ?>"><?php echo ($db["name"]); ?></option><?php endforeach; endif; ?>
                    </select>
                </div>
                <div class="xzpp">保险展业证号码:
                    <input type="text" name="number" placeholder="请输入26位展业证编号" value="" />
                </div>
                <?php if($sf != 4): ?><div class="xzqy" key="contry">
                    	<p>选择代理区域:</p>
                        <select id="prov" name="prov" class="select-sheng">
                            <option value="">请选择</option>
                        </select>
                        <span>省</span>
                        <?php if($sf < 3): ?><select id="city" name="city" key="third" class="select-shi">
                                <option value="">请选择</option>
                            </select>
                            <span>市</span><?php endif; ?>
                            <?php if($sf == 1): ?><select id="area" name="area" key="sec" class="select-qu">
                                    <option value="">请选择</option>
                                </select>
                                <span>区/县</span><?php endif; ?>
                    </div><?php endif; ?>
                <div class="inquiry">
                	<div class="quiry">
                    	<p class="quiry_1">查询</p>
                    	<p class="quiry_2">该区域还有<span>3</span>名代理资格</p>
                    </div>
                    <table class="sheet">
                    	<tr>
                        	<th class="sheet_1">序号</th>
                            <th class="sheet_2">账号</th>
                            <th class="sheet_3">姓名</th>
                            <th class="sheet_4">日期</th>
                        </tr>
                        <tr></tr>
                    </table>
                </div>
                <?php if($sf != 4): ?><div class="weui_cells weui_cells_radio">
                        <label class="weui_cell weui_check_label">
                            <div class="weui_cell_bd weui_cell_primary" style="font-size:0.8rem;">
                                <p style="float:left;">你选择的代理区域是：</p>
                                <p><span id="sp"></span><span id="sc"></span><span id="sa"></span></p>
                            </div>
                            <div class="queren" id="htm">待确认</div>
                        </label>
                    </div><?php endif; ?>
                <div class="subordinate">
                    <p>所属招商中心：</p>
                    <select class="insubo" name="mc_id">
                        <option value="">请选择</option>
                        <?php if(is_array($mc)): foreach($mc as $key=>$mlist): ?><option value="<?php echo ($mlist["mid"]); ?>"><?php echo ($mlist["name"]); ?></option><?php endforeach; endif; ?>
                    </select>
                </div>
                <?php if($sf > 1): ?><div style="width:100%;border-bottom:solid 5px #00BFFF;" id="give" give="<?php echo ($sf); ?>"></div>
                    <div class="xzqy">
                        <p>汇盟通宝选择代理区域：</p>
                        <select id="hprov" name="hprov" class="select-sheng">
                            <option value="">请选择</option>
                        </select>
                        <span>省</span>
                        <select id="hcity" name="hcity" class="select-shi">
                            <option value="">请选择</option>
                        </select>
                        <span>市</span>
                        <?php if($sf < 4): ?><select id="harea" name="harea" key="<?php echo ($sf); ?>" class="select-qu">
                                <option value="">请选择</option>
                            </select>
                            <span>区/县</span><?php endif; ?>
                    </div>
                    <div class="weui_cells weui_cells_radio">
                        <label class="weui_cell weui_check_label">
                            <div class="weui_cell_bd weui_cell_primary" style="font-size:0.8rem;">
                            	<p>你选择的代理区域是：</p>
                                <p><span id="hsp"></span><span id="hsc"></span><span id="hsa"></span></p>
                            </div>
                            <div class="queren" id="kqr">待确认</div>
                        </label>
                    </div><?php endif; ?>
                <?php if($sf == 2): ?><div class="inquiry">
                        <div class="quiry">
                            <p class="quiry_1">查询</p>
                            <p class="quiry_2" style="display: block;">该区域还有<span>9</span>名代理资格</p>
                        </div>
                        <table class="sheet">
                            <tbody>
                                <tr>
                                    <th class="sheet_1">序号</th>
                                    <th class="sheet_2">账号</th>
                                    <th class="sheet_3">姓名</th>
                                    <th class="sheet_4">日期</th>
                                </tr>
                                <tr style="display: table-row;"></tr>
                            </tbody>
                        </table>
                    </div><?php endif; ?>
                <input class="weui_btn weui_btn_warn" style="width:80%;text-align:center;" value="确认" type="submit">
            </div>
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
        var area = 0;
        var AREA = false;
        var DLQ = false;
        var ZXZ = false;
        var ZSZ = false;
        var BRAND = false;
        var HAREA = false;
        var KQR = false;
        var HPROV = false;
        var HCITY = false;
        $('#brand').change(function(){
            var brand = $(this).val();
            // alert(brand);
            if(brand){
                BRAND = true;
            }else{
                BRAND = false;
            }
        });
        $('input[name=number]').blur(function(){
            var v = $(this).val();
            var reg = /^\d{26}$/
            if(!reg.test(v)){
                alert('请输入有效展业证编号');
                ZXZ = false;
            }else{
                ZXZ =true;
            } 
        });
        $('select[name=mc_id]').change(function(){
            var mc = $(this).val();
            if(mc){
                ZSZ = true;
            }else{
                ZSZ = false;
            }
        });
        $('select[name=prov]').change(function(){
            prov = $(this).val();
            $('#sp').text($(this).find("option:selected").text());
            $('#sc').empty();
            $('#sa').empty();
            $('#htm').text('待确认');
            DLQ = false;
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
            $('#htm').text('待确认');
            DLQ = false;
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
            $('#htm').text('待确认');
            DLQ = false;
            if(area){
                AREA = true;
            }else{
                AREA = false;
            }
        });
        if($('.queren').text()){
            var DLQ = false;
            $('#htm').click(function(){
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
    //汇盟通宝选择代理区域
        var give = $('#give').attr('give');
        if(give){
            var hprov = 0;
            var hcity = 0;
            var harea = 0;
            $('#hprov').click(function(){
                $.get("/work/pay_center/index.php/Home/index/address",{'pid':0},function(data){
                    // 遍历数据进行添加
                    for(var i=0;i<data.length;i++){
                    var op = $('<option value="'+data[i].areaid+'">'+data[i].areaname+'</option>');
                    $('#hprov').append(op);
                    }
                },'json');
            });
            $('#hprov').change(function(){
                // 获取当前省的id
                var pid = $(this).val();
                // 通过省的id去获取市的内容
                $.get("/work/pay_center/index.php/Home/index/address",{'pid':pid},function(data){
                    $('#hcity').empty().html('<option value="">请选择</option>');
                    $('#harea').empty().html('<option value="">请选择</option>');
                    // 遍历数据进行添加
                    for(var i=0;i<data.length;i++){
                       var op = $('<option value="'+data[i].areaid+'">'+data[i].areaname+'</option>');
                        $('#hcity').append(op);
                    }
                },'json');
            });
            $('#hcity').change(function(){
                // 获取当前省的id
                var pid = $(this).val();
                // 通过省的id去获取市的内容
                $.get("/work/pay_center/index.php/Home/index/address",{'pid':pid},function(data){
                    $('#harea').empty().html('<option value="">请选择</option>');
                    // 遍历数据进行添加
                    for(var i=0;i<data.length;i++){
                        var op = $('<option value="'+data[i].areaid+'">'+data[i].areaname+'</option>');
                        $('#harea').append(op);
                    }
                },'json');
            }); 
            $('select[name=hprov]').change(function(){
                hprov = $(this).val();
                $('#hsp').text($(this).find("option:selected").text());
                $('#hsc').empty();
                $('#hsa').empty();
                $('#kqr').text('待确认');
                KQR = false;
                if(hprov){
                    HPROV = true;
                }else{
                    HPROV = false;
                }
                HCITY = false;
                HAREA = false;
            });
            $('select[name=hcity]').change(function(){
                hcity = $(this).val();
                $('#hsc').text($(this).find("option:selected").text());
                $('#hsa').empty();
                $('#kqr').text('待确认');
                KQR = false;
                if(hcity){
                    HCITY = true;
                }else{
                    HCITY = false;
                }
                HAREA = false;
            });
            $('select[name=harea]').change(function(){
                harea = $(this).val();
                $('#hsa').text($(this).find("option:selected").text());
                $('#kqr').text('待确认');
                KQR = false;
                if(harea){
                    HAREA = true;
                }else{
                    HAREA = false;
                }
            });
            $('#kqr').click(function(){
                var kqr = $(this).text();
                if(kqr == '待确认'){
                    $(this).text('已确认');
                    KQR = true;
                }else{
                    $(this).text('待确认');
                    KQR = false;
                };
            });  
        }else{
            HAREA = true;
            KQR = true;
            HCITY = true;
            HPROV = true;
        }

        //汇盟通宝选择代理区域 end
        $('form').submit(function(){
            if(!$('select[name=harea]').attr('key')){
            HAREA = true;
            }
            var shiji = $('select[name=area]').attr('key');
            if(shiji != 'sec'){
                AREA = true;
            }

            var shengji = $('select[name=city]').attr('key');
            if(shengji != 'third'){
                CITY = true;
            }
            var contry = $('.xzqy').attr('key');
            if(!contry){
                PROV = true;
                DLQ = true;
            }
            // alert('1'+BRAND);//1
            // alert('2'+ZXZ);
            // alert('3'+ZSZ);
            // alert('4'+PROV);
            // alert('5'+DLQ);
            // alert('6'+CITY);
            // alert('7'+AREA);
            // alert('8'+HAREA);
            // alert('9'+KQR);
            // alert('10'+HCITY);
            // alert('11'+HPROV);
            if(BRAND && ZXZ && ZSZ && PROV && DLQ && CITY && AREA && HAREA && KQR && HCITY && HPROV){
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