<?php
/**
 * Created by PhpStorm.
 * User: chenliang
 * Date: 2018/8/3
 * Time: 上午10:11
 */
header("Content-type: application/json; charset=utf-8");

$json_string = file_get_contents('v.json');
echo $json_string;exit;