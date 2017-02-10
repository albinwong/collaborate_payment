<?php
namespace Home\Controller;
use Think\Controller;
class DirectController extends Controller {
    public function index(){
        $this->display();
    }

    // public function manger(){
    // 	$this->display();
    // }

    // public function test(){
    // 	if(IS_POST){
    // 		$_SESSION['pay'] = $_POST;
	   //  	// dump($_SESSION['pay']);exit;
    // 		$this->redirect('pay');
    // 	}else{
    // 		header("location:".$_SERVER['HTTP_REFERER']);
    // 	}
    	
    // }

    // public function pay(){
    // 	$merchants = M('merchants');
    // 	$mlists = $merchants -> field('mid,intro,name') -> select();
    //     // dump($mlists);exit;
    // 	$this->assign('mc',$mlists);
    // 	$this->assign('sf',$_SESSION['pay']['identify']);
    // 	$this->display();
    // }

    // public function address(){
    //     $addr = M('area');
    //     $address = $addr->where('parentid='.$_GET['pid'])->order('areaid asc')->select();
    //     echo json_encode($address);
    // }

    // public function rec(){
    //     unset($data);
    // 	$data= $_POST;
    //     foreach($_SESSION['pay'] as $k=>$v){
    //         $data[$k] = $v;
    //     }
    //     $data['user'] = 1;//用户的ID
    //     $data['status'] = 1;//未付款
    //     $data['oid'] = date('YmdHis').rand(1000,9999); 
    //     $order = M("agent_order");
    //     $res = $order->add($data);
    //     echo $order->_SQL();
    //     if($res){
    //         // $
    //     }

    //     dump($data);exit;
    // 	// $data['pay_end'] = 
    // }

}