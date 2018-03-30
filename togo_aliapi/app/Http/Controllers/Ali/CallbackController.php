<?php
/**
 * Created by PhpStorm.
 * User: chenliang
 * Date: 2018/3/29
 * Time: 下午6:22
 */

namespace App\Http\Controllers\Ali;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CallbackController extends Controller
{



    public function index(Request $request){
        $item       = $request->input('item_id','');
        $task       = $request->input('task_status','');

        if(empty($item)){
            return 0;
        }


        $content = $item."\t".$task."\t".date('Y/m/d H:i:s')."\r\n";
        $f = fopen('test.txt', 'a+');//在文件的结尾插入，所以用了fopen和a+，
        fwrite($f, $content);
        fclose($f);

        return 1;

    }
}