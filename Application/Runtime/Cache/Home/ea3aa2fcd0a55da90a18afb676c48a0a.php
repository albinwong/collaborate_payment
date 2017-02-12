<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>汇盟通宝pay</title>
<meta name="viewport" content="width=divice-width minimum-scale=1.0 maximum-scale=1.0 user-scalable=no"/>
<link href="/work/pay_center/Public/test/Css/layer.css" type="text/css" rel="stylesheet">
<link href="/work/pay_center/Public/test/Css/order.css" type="text/css" rel="stylesheet">
<link href="/work/pay_center/Public/test/Css/swiper-3.4.1.min.css" type="text/css" rel="stylesheet">
<link href="/work/pay_center/Public/test/Css/weui.css" type="text/css" rel="stylesheet">
<link href="/work/pay_center/Public/test/Css/common.css" type="text/css" rel="stylesheet">
<link href="/work/pay_center/Public/test/Css/style/throughsetting.css" type="text/css" rel="stylesheet">
<link href="/work/pay_center/Public/test/Css/style/pay.css" type="text/css" rel="stylesheet">
<script src="/work/pay_center/Public/test/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="/work/pay_center/Public/test/js/layer.js" type="text/javascript"></script>
<script src="/work/pay_center/Public/test/js/order.js" type="text/javascript"></script>
<script src="/work/pay_center/Public/test/js/js/pay.js" language="javascript"></script>
</head>

<body style="background:#FFF;">
<div class="weui_tab">
    <div class="weui_tab_bd">
        <header>
            <div class="pull-left" onclick="window.history.back()">
            <img class="icon-rotate fa fa-rotate-left" src="/work/pay_center/Public/test/img/Arrow.png"/>
        	</div>
            <div class="shuaxin" onclick="window.history.go(0)">
            	<img class="icon-rotate fa fa-rotate-left" src="/work/pay_center/Public/test/img/new.png"/>
        	</div>
            <div class="login-title">汇盟通宝</div>
        </header>
        
        <div class="weui_tab_bd" style="margin-top:60px; margin-bottom:80px;">
        	<div class="pay">
            	<p>付款金额:<span>4950</span>元</p>
                <p class="inpay_1">配送通宝币TBC：4950元</p>
            </div>
            <div class="weui_cells_title">支付方式</div>
            <div class="weui_cells weui_cells_radio">
                <label class="weui_cell weui_check_label" for="alipay">
                    <div class="weui_cell_bd weui_cell_primary">
                        <img src="/work/pay_center/Public/test/img/pay/pay-1.png" />
                    </div>
                    <div class="weui_cell_ft">
                        <input type="radio" class="weui_check" name="paysWay" id="alipay" value="alipay">
                        <span class="weui_icon_circle"></span>
                    </div>
                </label>
                <label class="weui_cell weui_check_label" for="wechat">
                    <div class="weui_cell_bd weui_cell_primary">
                        <img src="/work/pay_center/Public/test/img/pay/pay-2.png" />
                    </div>
                    <div class="weui_cell_ft">
                        <input type="radio" name="paysWay" class="weui_check" id="wechat" value="wechatpay">
                        <span class="weui_icon_circle"></span>
                    </div>
                </label>
                <label  id='jiejifukuan' class="weui_cell weui_check_label" for="yinlian">
                    <div class="weui_cell_bd weui_cell_primary">
                        <img src="/work/pay_center/Public/test/img/pay/pay-8.png" />
                    </div>
                    <div class="weui_cell_ft" data-toggle="modal" data-target="#exampleModal">
                        <input type="radio" name="paysWay" class="weui_check" id="yinlian" value="yinlian">
                        <span class="weui_icon_circle"></span>
                    </div>
                </label>
            </div>
            <div onclick="javascript:submitOrder();" class="btn-login" style="bottom:0px; width: 100%;">
				<a href="http://pv.huimengtongbao.cn/home/test/payend" class="add weui_btn weui_btn_primary">
					<input type="submit" value="确 认 付 款">
				</a>
			</div>
        </div>
        
    </div>
</div>


</body>
</html>