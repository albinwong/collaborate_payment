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
            <div class="login-title">招商中心</div>
        </header>
    
    <div class="weui_tab">
        
<link href="/work/pay_center/Public/home/css/style/manager.css" type="text/css" rel="stylesheet">
<script src="/work/pay_center/Public/home/js/js/manager.js" language="javascript"></script>
<div class="weui_tab" style="background:#FFF;">
    <div class="weui_tab_bd">
        <div class="weui_navbar" style="position:absolute; top:60px;">
            <div class="weui_navbar_item weui_bar_item_on">分支机构</div>
            <div class="weui_navbar_item">招商权益</div>
            <div class="weui_navbar_item">联盟商家</div>
            <div class="weui_navbar_item">通粉会员</div>
        </div>
        <div class="weui_tab_bd" style="margin-top:60px; margin-bottom:130px;">
        	<div class="inweui_tab_bd" style="margin-top:15px;">
        		<?php if(is_array($list)): foreach($list as $key=>$lists): ?><div class="busniess_name">
	                    <div class="busniess_add"><?php echo ($lists["intro"]); ?>:<span><?php echo ($lists["name"]); ?></span></div>
	                    <div class="busniess_add">地址：<?php echo ($lists["office"]); ?></div>
	                </div><?php endforeach; endif; ?>
            </div>
            <div class="inweui_tab_bd">
            	<ul class="busniess_ul">
                	<li>
                   		<p class="busniess_ul_1">1.招商补贴</p>
                        <p class="busniess_ul_2">协助推荐代理商7%（346.5元），合伙人6%（1485元），服务中心5%（4950元），运营中心4%（1.6万）</p>
                    </li>
                    <li>
                    	<p class="busniess_ul_1">2.奖励代理商团队商家折扣的2%</p>
                        <p class="busniess_ul_2">例：招50个代理商，每个代理商直推25个联盟商家，50个代理商×25个商家×2万/月×折扣（9.5折）×2% = 2.5万元/月</p>
                    </li>
                    <li>
                    	<p class="busniess_ul_1">3.奖励代理商团队会员消费折扣的1%</p>
                        <p class="busniess_ul_2">例：招50个代理商，50个×25个×66人×1000元/月×折扣（9.5折）×1% = 4.125万元/月</p>
                    </li>
                    <li>
                    	<p class="busniess_ul_1">4.奖励代理商团队卡头刷卡收益的7%</p>
                        <p class="busniess_ul_2">例：招50个代理商，每个代理商安装50个，每个刷卡头每月刷2万，月收入约4000元</p>
                    </li>
                    <li>
                    	<p class="busniess_ul_1">5.奖励代理商团队扫码支付刷卡收益的7%</p>
                        <p class="busniess_ul_2">例：招50个代理商，每个代理商安装100个，每个用户每月刷1万，月收入约4000元</p>
                    </li>
                </ul>
            </div>
            <div class="inweui_tab_bd">
            	<ul class="busniess_ul">
                	<li>
                   		<p class="busniess_ul_1">1.商家返利平台买单</p>
                        <p class="busniess_ul_2">平台100%补贴商家返利部分，按日返0.1%</p>
                    </li>
                    <li>
                    	<p class="busniess_ul_1">2.商家返利平台奖励</p>
                        <p class="busniess_ul_2">平台奖励商家返利部分同等价值的商城积分</p>
                    </li>
                    <li>
                    	<p class="busniess_ul_1">3.免费提供收银系统</p>
                        <p class="busniess_ul_2">可支持银联,支付宝,微信,等各类支付方式</p>
                    </li>
                    <li>
                    	<p class="busniess_ul_1">4.消费引流</p>
                        <p class="busniess_ul_2">免费成为平台千万会员消费的首选商家,免费广告宣传</p>
                    </li>
                    <li>
                    	<p class="busniess_ul_1">5.消费贷款</p>
                        <p class="busniess_ul_2">正常使用6个月后,可申请3-100万不看征信的无抵押贷款</p>
                    </li>
                    <li>
                    	<p class="busniess_ul_1">6.持续收益</p>
                        <p class="busniess_ul_2">把自已客户转换成汇盟通宝会员，绑定会员的终身消费；可持续性享有店外店管道收益,提前实现养老无忧的生活</p>
                    </li>
                    <li>
                    	<p class="busniess_ul_1">7.准入比例</p>
                        <p class="busniess_ul_2">联盟商家在同一个代理区域内，同行准入比例不超过25%,先到先得</p>
                    </li>
                    <li>
                    	<p class="busniess_ul_1">8.资金保障</p>
                        <p class="busniess_ul_2">联盟商家资金由平台提前垫付,3个小时可到账,资金无沉淀无风险,提高商家资金使用率</p>
                    </li>
                </ul>
            </div>
            <div class="inweui_tab_bd">
            	<ul class="busniess_ul">
                	<li>
                   		<p class="busniess_ul_1">a.会员注册</p>
                        <p class="busniess_ul_2">只能通过扫描会员、商家及代理商的二维码生成，不能直接在APP注册</p>
                    </li>
                    <li>
                    	<p class="busniess_ul_1">b.消费省钱</p>
                        <p class="busniess_ul_2">会员在联盟商家消费，平台补贴联盟商家折扣部份的110%做为现金返现</p>
                    </li>
                    <li>
                    	<p class="busniess_ul_1">c.消费挣钱</p>
                        <p class="busniess_ul_2">会员在联盟商家消费，平台补贴联盟商家折扣部份的100%同等价值积分，积分就是钱，积分可当现金使用，可在直销商城，积分商城购买等值商品</p>
                    </li>
                    <li>
                    	<p class="busniess_ul_1">d.分享得利</p>
                        <p class="busniess_ul_2">直推会员在联盟商家消费，奖励联盟商家折扣的5%</p>
                        <p class="busniess_ul_2">间推会员在联盟商家消费，奖励联盟商家折扣的5%</p>
                    </li>
                    <li>
                    	<p class="busniess_ul_1">e.保险超市</p>
                        <p class="busniess_ul_2">会员消费积分累计达495PV时，可获意外保险卡一张！消费获得的积分可在保险超市购买你想要的养老保险产品，实现养老无忧</p>
                    </li>
                </ul>
                <ul style="margin-top:30px;">
                	<li style="color:#c90909;">会员加入方式:会员推荐会员，商家推荐会员，代理推荐会员</li>
                </ul>
            </div>
        </div>
        
    </div>
</div>

        
    </div>
</body>
</html>