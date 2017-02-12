<?php
namespace Home\Controller;
use Think\Controller;
class InteController extends Controller {
    public function index(){
        $this->display();
    }

    public function check(){
    	if(IS_POST){
    		$_SESSION['pay'] = $_POST;
	    	// dump($_SESSION['pay']);exit;
    		$this->redirect('info');
    	}else{
    		header("location:".$_SERVER['HTTP_REFERER']);
    	}
    	
    }

    public function info(){
    	$merchants = M('merchants');
    	$mlists = $merchants -> field('mid,intro,name') -> select();
    	$this->assign('mc',$mlists);
        $this->assign('sf',$_SESSION['pay']['identify']);
    	$this->display();
    }


    public function rec(){
        unset($data);
    	$data= $_POST;
        foreach($_SESSION['pay'] as $k=>$v){
            $data[$k] = $v;
        }
        $data['user'] = 1;//用户的ID
        $data['status'] = 1;//未付款
        $data['oid'] = date('YmdHis').rand(1000,9999); 
        $order = M("inte_order");
        $res = $order->add($data);
        echo $order->_SQL();
        if($res){
            // $
        }

        dump($data);exit;
    }

}