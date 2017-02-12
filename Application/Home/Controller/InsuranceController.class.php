<?php
namespace Home\Controller;
use Think\Controller;
class InsuranceController extends Controller {
    public function index(){
        $this->display();
    }

    public function check(){
        if(IS_POST){
            $_SESSION['pay'] = $_POST;
            $this->redirect('info');
        }else{
            header("location:".$_SERVER['HTTP_REFERER']);
        }
    }

    public function info(){
        $merchants = M('merchants');
        $mlists = $merchants -> field('mid,intro,name') -> select();
        $brand = M("insurance_brand")->select();
        $this->assign('mc',$mlists);
        $this->assign('sf',$_SESSION['pay']['identify']);
        $this->assign('bd',$brand);
        $this->display();
    }

    public function settlement(){
        if(IS_POST){
            if($_SESSION['pay']["identify"] != 1){
                $hui['mc_id'] = $_POST['mc_id'];
                $hui['prov'] = $_POST['hprov'];
                $hui['city'] = $_POST['hcity'];
                $hui['area'] = $_POST['harea'];
                $hui['pay_type'] = '保险超市';
                unset($_POST['hprov']);
                unset($_POST['hcity']);
                unset($_POST['harea']);
                $_SESSION['pay']['hui'] = $hui;
            }
            foreach($_POST as $k=>$v){
                $_SESSION['pay'][$k] = $v;
            }
            // dump($_SESSION['pay']);exit;
            $this->assign('figure',$_SESSION['pay']["figure"]);
            $this->display();
        }else{
            header("location:".$_SERVER['HTTP_REFERER']);
        }
    }

    public function addOrder(){
        if(IS_POST){
            if($_SESSION['pay']['hui']){
                $give = $_SESSION['pay']['hui'];
            }
            unset($_SESSION['pay']['hui']);
            foreach($_SESSION['pay'] as $k=>$v){
                $data[$k] = $v;
            }
            $data['pay_type'] = $_POST['pay_type'];
            $data['user'] = 1;//用户的ID
            $data['status'] = 1;//未付款
            $data['oid'] = date('YmdHis').rand(1000,9999); 
            $order = M("insur_order");
            $res = $order->add($data);
            // dump($res);exit;
            if($res && $give){
                $oid = $order->field('oid')->where('id',$res)->find();
                $give['oid'] = $oid['oid'];
                $hmt = M('agent_order')->add($give);
            }
            if($res){
                if($_POST['pay_type'] == '支付宝'){
                    redirect(U('Home/Pay/alipay'), 1, '页面跳转中...');
                }else if($_POST['pay_type'] == '微信'){
                    redirect(U('Home/Pay/weixin'), 1, '页面跳转中...');
                }else{
                    redirect(U('Home/Pay/transfer'), 1, '页面跳转中...');
                }
            }
        }else{
            header("location:".$_SERVER['HTTP_REFERER']);
        }
    }


}