<?php
namespace Home\Controller;
use Think\Controller;
class WeipayController extends Controller {
      /*const APPID = 'wx8a47a57923009cce';
      const MCHID = '1306973701';
      const KEY = 'ui33nto7gb47a57h89g2322m00g93cce';
      const APPSECRET = '0d7dacceddf3fbd53c0c21ca517c5392';*/
    // public function index(){
    //   Vendor("Weipay.lib.Config",dirname(__FILE__),".php");
    //   if(!session("OPENID")){
    //     if(!isset($_GET['code'])){
    //       $redirect_uri = "http://".rtrim($_SERVER['HTTP_HOST'],'/').__SELF__;//地址
    //       $redirect_uri = urlencode($redirect_uri);
    //       redirect("https://open.weixin.qq.com/connect/oauth2/authorize?appid".APPID."&redirect_uri=$redirect_uri&response_type=code&scope=snsapi_base&state=STATE#wechat_redirect");
    //       die();
    //     }
    //     if(isset($_GET['code'])){
    //       $code = $_GET['code'];
    //       $str = myget("https://api.weixin.qq.com/sns/oauth2/access_token?appid=".APPID."&secret&=".APPSECRET."&code=$CODE&grant_type=authorization_code");
    //       $arr = json_decode($str,TRUE);
    //       session('OPENID',$arr['openid']);

    //     }
    //   }
    // }

      /**
 * 微信商城
 */ 
public function __construct() {    
       parent::__construct();
       define("APPID", 'wx8a47a57923009cce');//微信公众号APPID
       define("MCHID","1306973701");//微信商户号
       define("KEY","ui33nto7gb47a57h89g2322m00g93cce");//微信商户自定义32为KEY
       define("APPSECRET",'0d7dacceddf3fbd53c0c21ca517c5392');//微信公众号appsecret
       if (!session("OPENID")) {//判断是否有openid
           if (!isset($_GET['code'])) {
               $redirect_uri = "http://" . rtrim($_SERVER['HTTP_HOST'], '/') . __SELF__;//地址
               $redirect_uri = urlencode($redirect_uri);
               redirect("https://open.weixin.qq.com/connect/oauth2/authorize?appid=" . APPID . "&redirect_uri=$redirect_uri&response_type=code&scope=snsapi_base&state=STATE#wechat_redirect");
               die();
           }
           if (isset($_GET['code'])) {           
               $code = $_GET['code'];
               $str = myget("https://api.weixin.qq.com/sns/oauth2/access_token?appid=" . APPID . "&secret=" . APPSECRET . "&code=$code&grant_type=authorization_code");  
               $arr = json_decode($str, TRUE);
               session('OPENID', $arr['openid']);//设置OPENID
           }
       }
   }
 /**
     * 获取支付参数
     */
    public function getrmsg() {
        ini_set('date.timezone', 'Asia/Shanghai');
//引用文件的地址改动后要注意
        require_once "./cwx/lib/WxPay.Api.php";
        require_once "./cwx/WxPay.JsApiPay.php";
        require_once './cwx/log.php';
//初始化日志
        $logHandler = new \CLogFileHandler("./wxpay/logs/" . date('Y-m-d') . '.log');
        $fee = (real) I("salary"); //这里是支付的总金额（元）  
        $ordersn = \WxPayConfig::MCHID . date("YmdHis").  rand(1000,9999);//交易号(保存到本地，后面退款要用的)
//①、获取用户openid
        $tools = new \JsApiPay();
//$openId = $tools->GetOpenid();//获取OPENID
        $openId =session("OPENID");//这个前面生成OPENID都一样，那这样这里可以优化，就是上面的获取OPENID可以省去，用上面的获取OPENID
//②、统一下单
        $input = new \WxPayUnifiedOrder();
        $input->SetBody("合作缴费");
        // $input->SetAttach('合作缴费'.$_GET['oid']);
        // $input->SetOut_trade_no($_GET['oid']);//交易号
        // $input->SetTotal_fee($_SESSION['pay']['figure']*100); //单位分
        $input->SetAttach('合作缴费'.date('YmdHis'));
        $input->SetOut_trade_no(time());//交易号
        $input->SetTotal_fee(1*100); //单位分
        $input->SetTime_start(date("YmdHis"));//起始交易时间
        $input->SetTime_expire(date("YmdHis", time() + 600));//过期时间
        $input->SetGoods_tag("微信支付");
        $input->SetNotify_url("http://".$_SERVER["HTTP_HOST"].U("Home/Weipay/wxpaynotify"));//支付回调地址，这里改成你自己的回调地址。
        $input->SetTrade_type("JSAPI");//交易类型，JSAPI,NATIVE,APP
        $input->SetOpenid($openId);
        $order = \WxPayApi::unifiedOrder($input);
        $jsApiParameters = $tools->GetJsApiParameters($order);
        echo $jsApiParameters;
    }

    // /**
    //  * 获取支付参数
    //  */
    // public function getrmsg() {
    //   ini_set('date.timezone', 'Asia/Shanghai');
    //   //引用文件的地址改动后要注意
    //   Vendor("Weipay.lib.Config",dirname(__FILE__),".php");
    //   Vendor("Weipay.lib.Api",dirname(__FILE__),".php");
    //   Vendor("Weipay.JsApiPay",dirname(__FILE__),".php");
    //   Vendor("Weipay.log",dirname(__FILE__),".php");
    //   //初始化日志
    //     $logHandler = new \CLogFileHandler(date('Y-m-d') . '.log');
    //     $fee = (real) I("salary"); //这里是支付的总金额（元）  
    //     $ordersn = \WxPayConfig::MCHID . date("YmdHis").  rand(1000,9999);//交易号(保存到本地，后面退款要用的)
    //   //①、获取用户openid
    //     $tools = new \JsApiPay();
    //   //$openId = $tools->GetOpenid();//获取OPENID
    //     $openId =session("OPENID");//这个前面生成OPENID都一样，那这样这里可以优化，就是上面的获取OPENID可以省去，用上面的获取OPENID
    //   //②、统一下单
    //     $input = new \WxPayUnifiedOrder();
    //     $input->SetBody("微信支付");
    //     $input->SetAttach("微信支付");
    //     $input->SetOut_trade_no($ordersn);//交易号
    //     $input->SetTotal_fee($fee * 100); //单位分
    //     $input->SetTime_start(date("YmdHis"));//起始交易时间
    //     $input->SetTime_expire(date("YmdHis", time() + 600));//过期时间
    //     $input->SetGoods_tag("微信支付");
    //     $input->SetNotify_url("http://".$_SERVER["HTTP_HOST"].U("Weipay/wxpaynotify"));//支付回调地址，这里改成你自己的回调地址。
    //     $input->SetTrade_type("JSAPI");//交易类型，JSAPI,NATIVE,APP
    //     $input->SetOpenid($openId);
    //     $order = \WxPayApi::unifiedOrder($input);
    //     $jsApiParameters = $tools->GetJsApiParameters($order);
    //     echo $jsApiParameters;
    // }

    /**
     *  微信通知地址(微信网页)
     */
    public function wxpaynotify() {
        dump($_GET);
        $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
        $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);//解析回调数据
        //file_put_contents("./test123456.txt",serialize($postStr));
        $out_trade_no = $postObj->out_trade_no; //交易单号
        $result = $postObj->result_code; //SUCCESS支付成功
        if ($result != "SUCCESS") {
            die("error");
        }
        //下面可以写处理的支付订单状态等一些内容了
        //$res = M("cdorder")->where("ordersn='{$out_trade_no}' and typeid=0")->save(array("typeid" => 1)); //将微信订单中的状态置1;
        if ($res) {
            echo 'SUCCESS';
        } else {
            echo 'error';
        }
    }


    public function success(){
      /*["buyer_email"] => string(18) "albinwong@sina.com"
      ["buyer_id"] => string(16) "2088002630753183"
      ["exterface"] => string(25) "create_direct_pay_by_user"
      ["is_success"] => string(1) "T"
      ["notify_id"] => string(74) "RqPnCoPT3K9%2Fvwbh3InZdaZ9KgpBO%2B%2FfWSeQ8kmNHF1Y6gr3QV2alI3nQFn09rmP2Hs0"
      ["notify_time"] => string(19) "2017-02-13 20:57:12"
      ["notify_type"] => string(17) "trade_status_sync"
      ["out_trade_no"] => string(18) "201702132042188442"
      ["payment_type"] => string(1) "1"
      ["seller_email"] => string(17) "2881526120@qq.com"
      ["seller_id"] => string(16) "2088911908953702"
      ["subject"] => string(12) "鍚堜綔缂磋垂"
      ["total_fee"] => string(4) "0.01"
      ["trade_no"] => string(28) "2017021321001004180211355892"
      ["trade_status"] => string(13) "TRADE_SUCCESS"
      ["sign"] => string(32) "11c93841d55b2442dd7e42d8adabe917"
      ["sign_type"] => string(3) "MD5"*/
      if($_GET['is_success'] == 'T'){
        $Model = M('');// 实例化一个model对象 没有对应任何数据表
        if($_SESSION['pay']['type'] == 'zxsc'){
          $do = $Model->execute("update direct_order set status=2 where oid=".$_GET['out_trade_no']);
          if(!$do){return;}
        }else if($_SESSION['pay']['type'] == 'hmtb'){
          $ao = $Model->execute("update agent_order set status=2 where oid=".$_GET['out_trade_no']);
          if(!$ao){return;}
        }else if($_SESSION['pay']['type'] == 'bxcs'){
          $io = $Model->execute("update insur_order set status=2 where oid=".$_GET['out_trade_no']);
          if(!$io){return;}
        }else{
          $iro = $Model->execute("update inte_order set status=2 where oid=".$_GET['out_trade_no']);
          if(!$iro){return;}
        }
      }
      redirect(U('Home/index/index'),15,'注：转账成功后请及时联系我司财务！电话：4009906128');
    }

    public function failed(){

        dump($_GET);
        dump('支付失败');exit;
    }

    

}