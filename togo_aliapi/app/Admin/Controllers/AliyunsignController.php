<?php


namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;

class AliyunsignController extends Controller
{
    public static $_Format = "JSON";
    public static $_Version = "2014-11-11";
    public static $_SignatureMethod = "HMAC-SHA1";
    public static $_SignatureVersion = "1.0";
    public static $_ServiceUrl = [
        'reinforce'    => "https://jaq.aliyuncs.com/",       //应用加固

    ];
    /**
     * 阿里云带签名请求
     * @param $accessKeyId
     * @param $requestParams
     * @return mixed
     */
    public static function requestAli($requestParams, $accessKeyId, $accessSecrec, $regions='reinforce')
    {
        //公共参数
        $publicParams = array(
            "Format"        =>  self::$_Format,
            "Version"       =>  self::$_Version,
            "AccessKeyId"   =>  $accessKeyId,
            "Timestamp"     =>  date("Y-m-d\TH:i:s\Z"),
            "SignatureMethod"   =>  self::$_SignatureMethod,
            "SignatureVersion"  =>  self::$_SignatureVersion,
            "SignatureNonce"    =>  substr(md5(rand(1,99999999)),rand(1,9),14),
        );
        //生成加密sign
        $params = array_merge($publicParams, $requestParams);

        $params['Signature'] =  self::sign($params, $accessSecrec);
        $uri = http_build_query($params);
        //最终带sign参数的url
        $url = self::$_ServiceUrl[$regions].'?'.$uri;
        $res = json_decode(self::curl($url), true);
        return $res;
    }

    public static function sign($params, $accessSecrec, $method="GET")
    {
        ksort($params);
        $stringToSign = strtoupper($method).'&'.self::percentEncode('/').'&';

        $tmp = "";
        foreach($params as $key=>$val){
            $tmp .= '&'.self::percentEncode($key).'='.self::percentEncode($val);
        }
        $tmp = trim($tmp, '&');
        $stringToSign = $stringToSign.self::percentEncode($tmp);
        $key  = $accessSecrec.'&';
        $hmac = hash_hmac("sha1", $stringToSign, $key, true);
        return base64_encode($hmac);
    }


    public static function percentEncode($value=null)
    {
        $en = urlencode($value);
        $en = str_replace("+", "%20", $en);
        $en = str_replace("*", "%2A", $en);
        $en = str_replace("%7E", "~", $en);
        return $en;
    }

    public static function curl($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
        $result=curl_exec ($ch);
        return $result;
    }
}