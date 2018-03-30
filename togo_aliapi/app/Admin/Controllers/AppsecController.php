<?php
/**
 * Created by PhpStorm.
 * User: chenliang
 * Date: 2018/3/29
 * Time: 下午2:11
 */

namespace App\Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Form;


class AppsecController extends Controller
{

    public function index(){
        return Admin::content(function (Content $content) {

            // 选填
            $content->header('移动安全');

            // 选填
            $content->description('');

            // 添加面包屑导航 since v1.5.7
            $content->breadcrumb(
                ['text' => '移动安全', 'url' => '/appsec']
            );

            $chapters = array();
            $articleView = view('admin.appsec',compact('chapters'))
                ->render();
            $content->row($articleView);

        });



    }

    /**
     * 安全扫描
     */
    public function scan(){

        return Admin::content(function (Content $content) {
            // 选填
            $content->header('安全扫描');

            // 选填
            $content->description('');

            // 添加面包屑导航 since v1.5.7
            $content->breadcrumb(
                ['text' => '移动安全', 'url' => '/appsec'],
                ['text' => '安全扫描', 'url' => '/scan']
            );


        });

    }

    /**
     * 应用加固
     */
    public function reinforce(){
        return Admin::content(function (Content $content) {

            // 选填
            $content->header('应用加固');

            // 选填
            $content->description('');

            // 添加面包屑导航 since v1.5.7
            $content->breadcrumb(
                ['text' => '移动安全', 'url' => '/appsec'],
                ['text' => '应用加固', 'url' => '/reinforce']
            );





        });
    }

    public function upload(Request $request){

        if ($request->isMethod('POST')) { //判断是否是POST上传，应该不会有人用get吧，恩，不会的

            //在源生的php代码中是使用$_FILE来查看上传文件的属性
            //但是在laravel里面有更好的封装好的方法，就是下面这个
            //显示的属性更多
            $fileCharater = $request->file('source');

            if ($fileCharater->isValid()) { //括号里面的是必须加的哦
                //如果括号里面的不加上的话，下面的方法也无法调用的

                //获取文件的扩展名
                $ext = $fileCharater->getClientOriginalExtension();

                //获取文件的绝对路径
                $path = $fileCharater->getRealPath();

                //定义文件名
                $filename = date('Y-m-d-h-i-s').'.'.$ext;

                //存储文件。disk里面的public。总的来说，就是调用disk模块里的public配置
                Storage::disk('public')->put($filename, file_get_contents($path));
            }
        }

        return Admin::content(function (Content $content) {

            // 选填
            $content->header('文件上传');

            // 选填
            $content->description('');



            $chapters = array();
            $articleView = view('admin.upload',compact('chapters'))
                ->render();
            $content->row($articleView);

        });
    }

    /**
     * 构造url
     */
    public function postAli(){

        $arr['AppInfo']['dataType']     = 1;
        $arr['AppInfo']['data']         = 'https://pay.c1993.com/togo-release.apk';
        $arr['AppInfo']['md5']          = 'ac05c9954d5d19344916f7fbe8e8a5a1';
        $arr['AppInfo']['size']         = 24751154;
        $arr['AppInfo']['callbackUrl']  = 'https://pay.c1993.com/ali.php';
        $arr['AppInfo']['appOsType']    = 1;
        $arr['AppInfo'] = json_encode($arr['AppInfo']);
        $AccessKeyId = 'LTAIiiyJVFlQrs3X';
        $accessSecrec = 'XC6h2tbPZTxKvfXwnfA14sTnrGMDAN';

        $res = AliyunsignController::requestAli($arr,$AccessKeyId,$accessSecrec);

        return $res;

    }

}