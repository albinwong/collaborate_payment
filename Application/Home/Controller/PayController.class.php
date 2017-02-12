<?php
namespace Home\Controller;
use Think\Controller;
class PayController extends Controller {
    public function index(){
        $this->display();
    }

    public function alipay(){
        dump('支付宝');exit;
    }

    public function weixin(){
        dump('微信');exit;
    }

    public function transfer(){
    	$this->display();
    }

    

}