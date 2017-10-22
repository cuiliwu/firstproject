<?php


/**
 * 天工支付（支付宝）具体实现
 * @auther ecclub ecstore dev dev@ecclub.cn
 * @version 0.1
 * @package ectools.lib.payment.plugin
 */
final class wap_payment_plugin_teegonali extends ectools_payment_app  implements ectools_interface_payment_app {

	/**
	 * @var string 支付方式名称
	 */
    public $name = '天工支付（支付宝）';//快钱网上支付
    /**
     * @var string 支付方式接口名称
     */
    public $app_name = '天工支付接口';
    /**
     * @var string 支付方式key
     */
	public $app_key = 'teegonali';
	/**
	 * @var string 中心化统一的key
	 */
	public $app_rpc_key = 'teegonali';
	/**
	 * @var string 统一显示的名称
	 */
    public $display_name = '天工支付(wap支付宝)';
    /**
	 * @var string 货币名称
	 */
    public $curname = 'CNY';
    /**
	 * @var string 当前支付方式的版本号
	 */
	public $ver = '1.0';
    /**
     * @var string 当前支付方式所支持的平台
     */
    public $platform = 'iswap';

	/**
	 * @var array 扩展参数
	 */
	public $supportCurrency = array("CNY"=>"CNY");

	/**
	 * 校验方法
	 * @param null
	 * @return boolean
	 */
    function is_fields_valiad(){
        return true;
    }

    /**
     * 前台支付方式列表关于此支付方式的简介
     * @param null
     * @return string 简介内容
     */
    function intro(){
        return '<b><h3>'.app::get('ectools')->_('天工收银是商派软件2015年正式推出的C2B云收银服务，致力于为各类用户提供融合、便捷、安全的场景支付服务。</h3></b><bR> 天工全渠道收银服务，集成主流支付渠道，含支付宝、微信、银联等，支持B2B、B2C、B2B2C、C2C、O2O等各类场景，协助互联网用户或企业快速开展收银业务，拓展收银场景。</h3></b><bR>天工多角色分账服务，能为企业或平台中的各个角色按规则自动分账，轻松提升资金管理、流转效率，降低财务成本。</h3></b><bR>资金安全监管方：平安银行</h3></b><bR>到账周期：T＋2</h3></b><bR>');
    }

    /**
     * 后台支付方式列表关于此支付方式的简介
     * @param null
     * @return string 简介内容
     */
    function admin_intro(){
        return app::get('ectools')->_('天工收银是商派软件2015年正式推出的C2B云收银服务，致力于为各类用户提供融合、便捷、安全的场景支付服务。</h3></b><bR> 天工全渠道收银服务，集成主流支付渠道，含支付宝、微信、银联等，支持B2B、B2C、B2B2C、C2C、O2O等各类场景，协助互联网用户或企业快速开展收银业务，拓展收银场景。</h3></b><bR>天工多角色分账服务，能为企业或平台中的各个角色按规则自动分账，轻松提升资金管理、流转效率，降低财务成本。</h3></b><bR>资金安全监管方：平安银行</h3></b><bR>到账周期：T＋2</h3></b><bR>');
    }


    /**
     * 构造方法
     * @param object 传递应用的app
     * @return null
     */
	public function __construct($app)
	{
		parent::__construct($app);

         //$this->callback_url = $this->app->base_url(true)."/apps/".basename(dirname(__FILE__))."/".basename(__FILE__);
		$this->callback_url = kernel::openapi_url('openapi.ectools_payment/parse/wap/wap_payment_plugin_teegonali', 'callback');
		if (preg_match("/^(http):\/\/?([^\/]+)/i", $this->callback_url, $matches))
		{
			$this->callback_url = str_replace('http://','',$this->callback_url);
			$this->callback_url = preg_replace("|/+|","/", $this->callback_url);
			$this->callback_url = "http://" . $this->callback_url;
		}
		else
		{
			$this->callback_url = str_replace('https://','',$this->callback_url);
			$this->callback_url = preg_replace("|/+|","/", $this->callback_url);
			$this->callback_url = "https://" . $this->callback_url;
		}
        $this->submit_url = 'https://api.teegon.com/charge/pay';
        $this->submit_method = 'POST';
        $this->submit_charset = 'utf-8';
    }

    /**
     * 提交支付信息的接口
     * @param array 提交信息的数组
     * @return mixed false or null
     */
	public function dopay($payment){
        //error_log(print_r($payment,1)."\n",3,DATA_DIR.'/2016-04-29.log');
        //print_r($payment);exit;
        //error_log(print_r($payment,1),3,DATA_DIR.'/4.31.log');
        $merId = $this->getConf('mer_id', __CLASS__);
        $ikey = $this->getConf('PrivateKey', __CLASS__);//私钥值，商户可上99BILL快钱后台自行设定
        $return['order_no'] = $payment['rel_id']; //订单号
        $return['payment_id'] = $payment['payment_id']; //订单号
        $return['channel'] = 'alipay';
        $return['return_url'] = $this->callback_url;
       // $return['return_url'] = 'http://www.qq.com';
        if($payment['pay_object'] == 'recharge')
        {
        $return['amount'] = $payment['money'];
        $return['subject'] ='充值';
        }else{
        $return['amount'] = $payment['total_amount'];
        $return['subject'] =$payment['body'];
        }
        $return['metadata'] = md5($return['order_no'].$return['payment_id']).'andpaymentid'.$return['payment_id'];
        //$return['notify_url'] = 'http://www.ecclub.cn';//支付成功后天工支付网关通知
        $return['notify_url'] = $this->callback_url;
        $return['client_ip'] = $_SERVER["REMOTE_ADDR"];
        $return['client_id'] = $merId;
        $return['sign'] = $this->sign($return,$ikey);

        foreach($return as $k=>$v){
            if ($v)
                $str.=$k."=".$v."&";
        }
        foreach($return as $key=>$val) {
            $this->add_field($key,$val);
        }
        if($this->is_fields_valiad()){
            //header('Content-type: text/html;charset=gb2312',false);
            echo $this->get_html();exit;
        }else{
            return false;
        }
    }

    /**
     * 支付回调的方法
     * @param array 回调参数数组
     * @return array 处理后的结果
     */
    function callback(&$in){
        $payment_id = explode('andpaymentid',$in['metadata']);
		$ret = array();
		$ret['payment_id'] = $payment_id['1'];
		$ret['bank'] = $in['bank'];
		$ret['currency'] = 'CNY';
		$ret['money'] = $in['amount'];
		$ret['cur_money'] = $in['amount'];
		$ret['trade_no'] = $in['charge_id'];
		$ret['pay_app_id'] = "teegonali";
		$ret['pay_type'] = 'online';
		$ret['memo'] = 'teegonali';
		$ret['t_payed'] =$in['pay_time'];
        ///首先进行签名字符串验证
        $SafetyKey = md5($in['order_no'].$ret['payment_id']);
        if($SafetyKey == $payment_id['0'] && $in['is_success'] == true){
                    $ret['status'] = 'succ';
        }else{
            $message=app::get('ectools')->_("签名认证失败！");
            $ret['status'] = 'invalid';
        }

        return $ret;
    }

    /**
     * 支付成功回打支付成功信息给支付网关
     */
    function ret_result($paymentId,$ret){
                $tgarr = array(
                    array("source_account"=>"main","target_account"=>"main","amount"=> $ret['cur_money']),
                );
                $tgreturn = json_encode($tgarr);
                $tgsign = md5($tgreturn.$this->getConf('PrivateKey', __CLASS__));
                header('Teegon-Rsp-Sign: '.$tgsign);
                echo $tgreturn;
                exit;
    }

    /**
     * 后台配置参数设置
     * @param null
     * @return array 配置参数列表
     */
    function setting(){
        return array(
                'pay_name'=>array(
                        'title'=>app::get('ectools')->_('支付方式名称'),
                        'type'=>'string',
						'validate_type' => 'required',
                ),
                'mer_id'=>array(
                        'title'=>app::get('ectools')->_('客户号'),
                        'type'=>'string',
						'validate_type' => 'required',
                ),
                'PrivateKey'=>array(
                        'title'=>app::get('ectools')->_('私钥'),
                        'type'=>'string',
						'validate_type' => 'required',
                ),
                'order_by' =>array(
                    'title'=>app::get('ectools')->_('排序'),
                    'type'=>'string',
                    'label'=>app::get('ectools')->_('整数值越小,显示越靠前,默认值为1'),
                ),
				'support_cur'=>array(
					'title'=>app::get('ectools')->_('支持币种'),
					'type'=>'text hidden cur',
					'options'=>$this->arrayCurrencyOptions,
				),
                'pay_fee'=>array(
                    'title'=>app::get('ectools')->_('交易费率'),
                    'type'=>'pecentage',
					'validate_type' => 'number',
                ),
                'pay_brief'=>array(
                    'title'=>app::get('ectools')->_('支付方式简介'),
					 'type'=>'textarea',
                ),
                'pay_desc'=>array(
                    'title'=>app::get('ectools')->_('描述'),
					'type'=>'html',
					'includeBase' => true,
                ),
                'pay_type'=>array(
                    'title'=>app::get('ectools')->_('支付类型（是否在线支付）'),
                    'type'=>'radio',
                    'options'=>array('false'=>app::get('ectools')->_('否'),'true'=>app::get('ectools')->_('是')),
                    'name' => 'pay_type',
                ),
                'status'=>array(
                    'title'=>app::get('ectools')->_('是否开启此支付方式'),
                    'type'=>'radio',
                    'options'=>array('false'=>app::get('ectools')->_('否'),'true'=>app::get('ectools')->_('是')),
                    'name' => 'status',
				),
            );
    }

    /**
     * 生成各个参数的加密串
     * @param 结果字符串，引用值
     * @param 加密串键值
     * @param 加密串的值
     * @return 加密串结果
     */

    public function sign($para_temp,$ikey){
        //除去待签名参数数组中的空值和签名参数
        $para_filter = $this->para_filter($para_temp);

        //对待签名参数数组排序
        $para_sort = $this->arg_sort($para_filter);
        //生成加密字符串
        $prestr = $this->create_string($para_sort);
        $prestr = $ikey .$prestr . $ikey;
        return strtoupper(md5($prestr));
    }


    private function para_filter($para) {
        $para_filter = array();
        while (list ($key, $val) = each ($para)) {
            if($key == "sign")continue;
            else	$para_filter[$key] = $para[$key];
        }
        return $para_filter;
    }

    private function arg_sort($para) {
        ksort($para);
        reset($para);
        return $para;
    }

    private function create_string($para) {
        $arg  = "";
        while (list ($key, $val) = each ($para)) {
            $arg.=$key.$val;
        }


        //如果存在转义字符，那么去掉转义
        if(get_magic_quotes_gpc()){$arg = stripslashes($arg);}

        return $arg;
    }
        /**
     * 生成支付表单 - 自动提交
     * @params null
     * @return null
     */
    public function gen_form()
    {
      return '';
    }
}

?>
