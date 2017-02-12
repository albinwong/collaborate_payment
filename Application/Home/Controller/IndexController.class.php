<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    public function info(){
        $res = M('merchants')->select();
        $this->assign('list',$res);
        $this->display();
    }

    public function address(){
        $addr = M('area');
        $address = $addr->field('areaid,areaname')->where('parentid='.$_GET['pid'])->order('areaid asc')->select();
        echo json_encode($address);
    }

}
