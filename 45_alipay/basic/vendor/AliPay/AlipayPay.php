<?php
include_once 'AlipaySubmit.php';
include_once 'AlipayCore.php';
include_once 'AlipayMD5.php';
include_once 'AlipayNotify.php';
class AlipayPay {

    //↓↓↓↓↓↓↓↓↓↓请在这里配置您的基本信息↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
    /**
     * @var String 合作身份者id，以2088开头的16位纯数字
     */
    //public $partner = '2088121774041830';
    public $partner = '2088021460567292';

    /**
     * @var String 收款支付宝账号
     */
    public $seller_email = 'hr@imooc.com';

    /**
     * @var String 安全检验码，以数字和字母组成的32位字符
     */
    public $key = 'mof755nxp43dxg9a4ts5uone4nw3lib8';

    //↑↑↑↑↑↑↑↑↑↑请在这里配置您的基本信息↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑

    /**
     * @var String 签名方式 不需修改
     */
    public $sign_type = 'MD5';

    /**
     * @var String 字符编码格式 目前支持 gbk 或 utf-8
     */
    public $input_charset = 'utf-8';

    /**
     * @var String ca证书路径地址，用于curl中ssl校验
     * 请保证cacert.pem文件在当前文件夹目录中
     */
    public $cacert = '\cacert.pem';

    /**
     * @var String 访问模式,根据自己的服务器是否支持ssl访问，若支持请选择https；若不支持请选择http
     */
    public $transport = 'http';

    /**
     * @var String 服务器异步通知页面路径
     * 需http://格式的完整路径，不能加?id=123这类自定义参数
     */
    public $notify_url = 'http://shop.mr-jason.com/notify.php';

    /**
     * @var String 页面跳转同步通知页面路径
     * 需http://格式的完整路径，不能加?id=123这类自定义参数，不能写成http://localhost/
     */
    public $return_url = 'http://shop.mr-jason.com/index.php?r=pay/return';
    public $extra_common_param = '';

    /**
     * @name requestPay
     * @desc
     * @param $out_trade_no String 商户订单号，商户网站订单系统中唯一订单号，必填
     * @param $subject String 订单名称
     * @param $total_fee String 付款金额
     * @param $body String 订单描述
     * @param $show_url String 商品展示地址
     * @return String 跳转HTML
     */
    public function requestPay($out_trade_no, $subject, $total_fee, $body, $show_url) {
        /*         * ************************请求参数************************* */
        //支付类型
        $payment_type = "1";
        //必填，不能修改
        //防钓鱼时间戳
        $anti_phishing_key = "";
        //若要使用请调用类文件submit中的query_timestamp函数
        //客户端的IP地址
        $exter_invoke_ip = "";
        //非局域网的外网IP地址，如：221.0.0.1

        /*         * ********************************************************* */

        //构造要请求的参数数组，无需改动
        $parameter = array(
            "service" => "create_direct_pay_by_user",
            "partner" => trim($this->partner),
            "seller_email" => trim($this->seller_email),
            "payment_type" => $payment_type,
            "notify_url" => $this->notify_url,
            "return_url" => $this->return_url,
            "out_trade_no" => $out_trade_no.time(),
            "subject" => $subject,
            "total_fee" => $total_fee,
            "body" => $body,
            "show_url" => $show_url,
            "extra_common_param" => $out_trade_no,
            "anti_phishing_key" => $anti_phishing_key,
            "exter_invoke_ip" => $exter_invoke_ip,
            "_input_charset" => trim(strtolower($this->input_charset))
        );

        //建立请求
        $alipaySubmit = new AlipaySubmit($this->bulidConfig());
        $html_text = $alipaySubmit->buildRequestForm($parameter, "get", "确认");
        return $html_text;
    }

    public function verifyNotify() {
        $alipayNotify = new AlipayNotify($this->bulidConfig());
        $verify_result = $alipayNotify->verifyNotify();

        return $verify_result;
    }

    public function verifyReturn() {
        $alipayNotify = new AlipayNotify($this->bulidConfig());
        $verify_result = $alipayNotify->verifyReturn();
        
        return $verify_result;
    }

    private function bulidConfig() {
        //构造要请求的配置数组
        $alipay_config = array(
            'partner' => $this->partner,
            'seller_email' => $this->seller_email,
            'key' => $this->key,
            'sign_type' => $this->sign_type,
            'input_charset' => $this->input_charset,
            'cacert' => $this->cacert,
            'transport' => $this->transport,
        );
        return $alipay_config;
    }

}
