<?php
/**
 * Created by PhpStorm.
 * User: ly
 * Date: 2018/8/22
 * Time: 13:54
 */
namespace app\system\controller;

use app\api\model\ConfigModel;
use think\Db;
use think\Controller;
use think\facade\Request;

class System extends Controller
{
    protected  $ConfigModel = '';
    public function __construct()
    {
        parent::__construct();
        $this->ConfigModel = new ConfigModel();
    }
    /**
     * 获取系统配置
     */
    public function getSystem(){
        //判断请求方式以及请求参数
        $inputData = Request::get();
        $method = Request::method();
        $params = ['type'];
        $ret = checkBeforeAction($inputData, $params, $method, 'GET', $msg);
        if(!$ret){
            return reJson(500, $msg, []);
        }
        $ConfigType = $this->ConfigModel->getConfigType();
        if(!in_array($inputData['type'],$ConfigType)){
            return reJson(500,'参数类型不存在');
        }
        $condition = array();
        $condition['type'] = $inputData['type'];
        $ConfigList = $this->ConfigModel->getConfigList($condition,'key,value,remarks');
        if($ConfigList){
            return reJson(200, '更新成功', $ConfigList);
        }
        return reJson(500, '更新失败', []);
    }


    /**
     * 保存系统配置
     */
    public function saveSystem(){
        //判断请求方式以及请求参数
        $inputData = Request::post();
        $method = Request::method();
        $params = ['config','type'];
        $ret = checkBeforeAction($inputData, $params, $method, 'POST', $msg);
        if(!$ret){
            return reJson(500, $msg, []);
        }
        $ConfigType = $this->ConfigModel->getConfigType();
        if(!in_array($inputData['type'],$ConfigType)){
            return reJson(500,'参数类型不存在');
        }
        $type = $inputData['type'];
        unset($inputData['type']);
        foreach ($inputData['config'] as $val){
            $this->ConfigModel->batchSaveConfig($val['key'],$val['value'],$val['remarks'],$type);
        }
        return reJson(200,'保存完成');
    }

    /**
     * 获取门户配置信息
     */
    public function getGateway(){
        //判断请求方式以及请求参数
        $inputData = Request::get();
        $method = Request::method();
        $params = [];
        $ret = checkBeforeAction($inputData, $params, $method, 'GET', $msg);
        if(!$ret){
            return reJson(500, $msg, []);
        }
        $condition = [];
        $condition['key'] = ['site_name','site_logo'];
        $condition['type'] = 'base';
        $ConfigList = $this->ConfigModel->getConfigList($condition);
        if($ConfigList === false){
            return reJson(500, '获取失败', []);
        }
        $ConfigList = $this->ConfigModel->ArrayToKey($ConfigList);
        return reJson(200, '获取成功', $ConfigList);
    }

    /**
     *保存门户配置信息
     */
    public function setGateway(){
        //判断请求方式以及请求参数
        $inputData = Request::post();
        $method = Request::method();
        $params = ['site_name','site_logo'];
        $remarks = ['site_name'=>'平台名称','site_logo'=>'平台logo'];
        $ret = checkBeforeAction($inputData, $params, $method, 'POST', $msg);
        if(!$ret){
            return reJson(500, $msg, []);
        }
        foreach ($params as $val){
            if(!empty($inputData[$val])){
                $this->ConfigModel->batchSaveConfig($val,$inputData[$val],$remarks[$val],'base');
            }
        }
        return reJson(200,'保存成功',[]);
    }

    /**
     * 获取启动页配置
     */
    public function getStartConfig(){
        //判断请求方式以及请求参数
        $inputData = Request::get();
        $method = Request::method();
        $params = [];
        $ret = checkBeforeAction($inputData, $params, $method, 'GET', $msg);
        if(!$ret){
            return reJson(500, $msg, []);
        }
        $condition = [];
        $condition['key'] = ['app_start_image','app_start_url','app_start_title'];
        $condition['type'] = 'client';
        $ConfigList = $this->ConfigModel->getConfigList($condition);
        if($ConfigList === false){
            return reJson(500, '获取失败', []);
        }
        $ConfigList = $this->ConfigModel->ArrayToKey($ConfigList);
        return reJson(200, '获取成功', $ConfigList);
    }

    /**
     * 设置启动页配置
     */
    public function setStartConfig(){
        //判断请求方式以及请求参数
        $inputData = Request::post();
        $method = Request::method();
        $params = ['app_start_image','app_start_url','app_start_title'];
        $remarks = ['app_start_image'=>'启动页图片','app_start_url'=>'启动页跳转链接','app_start_title'=>'启动页标题'];
        $ret = checkBeforeAction($inputData, $params, $method, 'POST', $msg);
        if(!$ret){
            return reJson(500, $msg, []);
        }
        foreach ($params as $val){
            if(!empty($inputData[$val])){
                $this->ConfigModel->batchSaveConfig($val,$inputData[$val],$remarks[$val],'client');
            }
        }
        return reJson(200,'保存成功',[]);
    }

    /**
     * 设置阿里短信服务配置
     */
    public function setAliSmsConfig(){
        //判断请求方式以及请求参数
        $inputData = Request::post();
        $method = Request::method();
        $params = ['ali_sms_key_id','ali_sign_name','ali_key_secret'];
        $remarks = ['ali_sms_key_id'=>'阿里短信服务key','ali_sign_name'=>'阿里短信签名','ali_key_secret'=>'阿里短信服务secret'];
        $ret = checkBeforeAction($inputData, $params, $method, 'POST', $msg);
        if(!$ret){
            return reJson(500, $msg, []);
        }
        foreach ($params as $val){
            if(!empty($inputData[$val])){
                $this->ConfigModel->batchSaveConfig($val,$inputData[$val],$remarks[$val],'client');
            }
        }
        return reJson(200,'保存成功',[]);
    }

    /**
     * 获取阿里短信服务配置
     */
    public function getAliSmsConfig(){
        //判断请求方式以及请求参数
        $inputData = Request::get();
        $method = Request::method();
        $params = [];
        $ret = checkBeforeAction($inputData, $params, $method, 'GET', $msg);
        if(!$ret){
            return reJson(500, $msg, []);
        }
        $condition = [];
        $condition['key'] = ['ali_sms_key_id','ali_sign_name','ali_key_secret'];
        $condition['type'] = 'client';
        $ConfigList = $this->ConfigModel->getConfigList($condition);
        if($ConfigList === false){
            return reJson(500, '获取失败', []);
        }
        $ConfigList = $this->ConfigModel->ArrayToKey($ConfigList);
        return reJson(200, '获取成功', $ConfigList);
    }

    /**
     * 设置极光推送配置
     */
    public function setJpushConfig(){
        //判断请求方式以及请求参数
        $inputData = Request::post();
        $method = Request::method();
        $params = ['Jpush_key','Jpush_secret'];
        $remarks = ['Jpush_key'=>'极光key','Jpush_secret'=>'极光secret'];
        $ret = checkBeforeAction($inputData, $params, $method, 'POST', $msg);
        if(!$ret){
            return reJson(500, $msg, []);
        }
        foreach ($params as $val){
            if(!empty($inputData[$val])){
                $this->ConfigModel->batchSaveConfig($val,$inputData[$val],$remarks[$val],'client');
            }
        }
        return reJson(200,'保存成功',[]);
    }

    /**
     * 获取极光推送配置
     */
    public function getJpushConfig(){
        //判断请求方式以及请求参数
        $inputData = Request::get();
        $method = Request::method();
        $params = [];
        $ret = checkBeforeAction($inputData, $params, $method, 'GET', $msg);
        if(!$ret){
            return reJson(500, $msg, []);
        }
        $condition = [];
        $condition['key'] = ['Jpush_key','Jpush_secret'];
        $condition['type'] = 'client';
        $ConfigList = $this->ConfigModel->getConfigList($condition);
        if($ConfigList === false){
            return reJson(500, '获取失败', []);
        }
        $ConfigList = $this->ConfigModel->ArrayToKey($ConfigList);
        return reJson(200, '获取成功', $ConfigList);
    }
    /**
     *设置版本信息
     */
    public function setVersion(){
        //判断请求方式以及请求参数
        $inputData = Request::post();
        $method = Request::method();
        $params = ['type','version','must_update'];
        $remarks = ['version'=>'版本号','must_update'=>'强制更新'];
        $ret = checkBeforeAction($inputData, $params, $method, 'POST', $msg);
        if(!$ret){
            return reJson(500, $msg, []);
        }
        if(!in_array($inputData['type'],['ios_version','android_version']))return reJson(500,'更新失败');
        foreach ($remarks as $key => $val){
            if(!empty($inputData[$key])){
                $this->ConfigModel->batchSaveConfig($key,$inputData[$key],$val,$inputData['type']);
            }
        }
        return reJson(200,'保存成功',[]);
    }
}