<?php
namespace Home\Controller;
use Think\Controller;
class MainController extends Controller {
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
        // dump($mlists);exit;
    	$this->assign('mc',$mlists);
    	$this->assign('sf',$_SESSION['pay']['identify']);
    	$this->display();
    }

    public function address(){
        $addr = M('area');
        $address = $addr->where('parentid='.$_GET['pid'])->order('areaid asc')->select();
        echo json_encode($address);
    }

    public function settlement(){
        if(IS_POST){
            foreach($_POST as $k=>$v){
                $_SESSION['pay'][$k] = $v;
            }
            // dump($_SESSION['pay']);exit;
            $this->assign('tp',$_SESSION['pay']["identify"]);
            $this->assign('figure',$_SESSION['pay']["figure"]);
            $this->display();
        }else{
            header("location:".$_SERVER['HTTP_REFERER']);
        }
    }

    public function addOrder(){
        if(IS_POST){
            foreach($_SESSION['pay'] as $k=>$v){
                $data[$k] = $v;
            }
            $data['pay_type'] = $_POST['pay_type'];
            $data['user'] = 1;//用户的ID
            $data['status'] = 1;//未付款
            $data['oid'] = date('YmdHis').rand(1000,9999); 
            $order = M("agent_order");
            $res = $order->add($data);
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
