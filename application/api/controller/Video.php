<?php
/**
 * Created by PhpStorm.
 * User: chenly
 * Date: 2017/11/6
 * Time: 9:18
 */

namespace app\api\controller;

use think\Request;
use think\Db;
use think\db\Query;
use think\Image;
use think\Config;
use app\common\service\DataService;
use app\common\service\FileService;
use app\admin\model\User as UserModel;
use app\common\controller\BaseApiRest;

class Video extends BaseApiRest{

    public $table = 'video';

    public function uploadVideo(){

        try{
            $file = Request::instance()->file('vfile');

            return json(["code"=>10000,"desc"=>"上传成功","data"=>$file]);

        }catch(\Exception $e){
            return json(["code"=>20001,"desc"=>"上传异常","data"=>[]]);
        }


    }
}