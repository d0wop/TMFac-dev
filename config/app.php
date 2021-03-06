<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// +----------------------------------------------------------------------
// | 应用设置
// +----------------------------------------------------------------------

return [
    // 应用名称
    'app_name'               => '',
    // 应用地址
    'app_host'               => '',
    // 应用调试模式
    'app_debug'              => Env::get(SERVER_ENV.'APP_DEBUG'),
    // 应用Trace
    'app_trace'              => Env::get(SERVER_ENV.'APP_TRACE'),
    // 应用模式状态
    'app_status'             => '',
    // 是否支持多模块
    'app_multi_module'       => true,
    // 入口自动绑定模块
    'auto_bind_module'       => false,
    // 注册的根命名空间
    'root_namespace'         => [],
    // 默认输出类型
    'default_return_type'    => 'html',
    // 默认AJAX 数据返回格式,可选json xml ...
    'default_ajax_return'    => 'json',
    // 默认JSONP格式返回的处理方法
    'default_jsonp_handler'  => 'jsonpReturn',
    // 默认JSONP处理方法
    'var_jsonp_handler'      => 'callback',
    // 默认时区
    'default_timezone'       => 'PRC',
    // 是否开启多语言
    'lang_switch_on'         => false,
    // 默认全局过滤方法 用逗号分隔多个
    'default_filter'         => '',
    // 默认语言
    'default_lang'           => 'zh-cn',
    // 应用类库后缀
    'class_suffix'           => false,
    // 控制器类后缀
    'controller_suffix'      => false,

    // +----------------------------------------------------------------------
    // | 模块设置
    // +----------------------------------------------------------------------

    // 默认模块名
    'default_module'         => 'index',
    // 禁止访问模块
    'deny_module_list'       => ['common'],
    // 默认控制器名
    'default_controller'     => 'Index',
    // 默认操作名
    'default_action'         => 'index',
    // 默认验证器
    'default_validate'       => '',
    // 默认的空模块名
    'empty_module'           => '',
    // 默认的空控制器名
    'empty_controller'       => 'Error',
    // 操作方法前缀
    'use_action_prefix'      => false,
    // 操作方法后缀
    'action_suffix'          => '',
    // 自动搜索控制器
    'controller_auto_search' => false,

    // +----------------------------------------------------------------------
    // | URL设置
    // +----------------------------------------------------------------------

    // PATHINFO变量名 用于兼容模式
    'var_pathinfo'           => 's',
    // 兼容PATH_INFO获取
    'pathinfo_fetch'         => ['ORIG_PATH_INFO', 'REDIRECT_PATH_INFO', 'REDIRECT_URL'],
    // pathinfo分隔符
    'pathinfo_depr'          => '/',
    // HTTPS代理标识
    'https_agent_name'       => '',
    // URL伪静态后缀
    'url_html_suffix'        => 'html',
    // URL普通方式参数 用于自动生成
    'url_common_param'       => false,
    // URL参数方式 0 按名称成对解析 1 按顺序解析
    'url_param_type'         => 0,
    // 是否开启路由延迟解析
    'url_lazy_route'         => false,
    // 是否强制使用路由
    'url_route_must'         => false,
    // 路由是否完全匹配
    'route_complete_match'   => false,
    // 使用注解路由
    'route_annotation'       => false,
    // 域名根，如thinkphp.cn
    'url_domain_root'        => '',
    // 是否自动转换URL中的控制器和操作名
    'url_convert'            => true,
    // 默认的访问控制器层
    'url_controller_layer'   => 'controller',
    // 表单请求类型伪装变量
    'var_method'             => '_method',
    // 表单ajax伪装变量
    'var_ajax'               => '_ajax',
    // 表单pjax伪装变量
    'var_pjax'               => '_pjax',
    // 是否开启请求缓存 true自动缓存 支持设置请求缓存规则
    'request_cache'          => false,
    // 请求缓存有效期
    'request_cache_expire'   => null,
    // 全局请求缓存排除规则
    'request_cache_except'   => [],

    // 默认跳转页面对应的模板文件
    'dispatch_success_tmpl'  => Env::get('think_path') . 'tpl/dispatch_jump.tpl',
    'dispatch_error_tmpl'    => Env::get('think_path') . 'tpl/dispatch_jump.tpl',

    // 异常页面的模板文件
    'exception_tmpl'         => Env::get('think_path') . 'tpl/think_exception.tpl',

    // 错误显示信息,非调试模式有效
    'error_message'          => '页面错误！请稍后再试～',
    // 显示错误信息
    'show_error_msg'         => false,
    // 异常处理handle类 留空使用 \think\exception\Handle
    'exception_handle'       => '',
    //全局路由
    'internal_api_host'      => Env::get(SERVER_ENV.'INTERNAL_API_HOST'),

    'domain'      => Env::get(SERVER_ENV.'DOMAIN'),

    'plate_domain' => Env::get(SERVER_ENV.'PLATFORM_DOMAIN'),

    'thisdns' => Env::get(SERVER_ENV.'INTERNAL_API_HOST'),

    //自定义配置项
    'component_url' => 'http://39.107.74.188/develop/Componentversion/curlVersionList',//开发者组件版本数据地址
    'base64_upload_url' => 'http://39.107.74.188/img/upload/changeHeadPic',//资源服务器上传图片地址
    'licenses_chk' => 'http://39.107.74.188/verify/verify/verifyLicenses',//licenses验证地址
    'resource_ip' => 'http://39.107.74.188',//资源服务器ip地址
    'shop_url'=>'http://120.27.13.229/mangrove/plugin/addPlugin',//调用商城新增应用接口
    //token保存时间
    'token_time'=>604800,
    'queue' =>[
        'connector'=>'database'
    ],
     //从平台拉取数据的配置
    'PullData' => [
        'key' => 'aaaa'
        ],
    'upload_info' => [
        'size_limit' => 102400,//上传大小限制，单位kb
        'allowed_types'=>[
            '3gpp'=>'audio/3gpp, video/3gpp',
            'ac3'=>'audio/ac3',
            'asf'=>'allpication/vnd.ms-asf',
            'au'=>'audio/basic',
            'css'=>'text/css',
            'csv'=>'text/csv',
            'doc'=>'application/msword',
            'dot'=>'application/msword',
            'dtd'=>'application/xml-dtd',
            'dwg'=>'image/vnd.dwg',
            'dxf'=>'image/vnd.dxf',
            'gif'=>'image/gif',
            'htm'=>'text/html',
            'html'=>'text/html',
            'jp2'=>'image/jp2',
            'jpe'=>'image/jpeg',
            'jpeg'=>'image/jpeg',
            'jpg'=>'image/jpeg',
            'js'=>'text/javascript, application/javascript',
            'json'=>'application/json',
            'mp2'=>'audio/mpeg, video/mpeg',
            'mp3'=>'audio/mpeg',
            'mp4'=>'audio/mp4, video/mp4',
            'mpeg'=>'video/mpeg',
            'mpg'=>'video/mpeg',
            'mpp'=>'application/vnd.ms-project',
            'ogg'=>'application/ogg, audio/ogg',
            'pdf'=>'application/pdf',
            'png'=>'image/png',
            'pot'=>'application/vnd.ms-powerpoint',
            'pps'=>'application/vnd.ms-powerpoint',
            'ppt'=>'application/vnd.ms-powerpoint',
            'rtf'=>'application/rtf, text/rtf',
            'svf'=>'image/vnd.svf',
            'tif'=>'image/tiff',
            'tiff'=>'image/tiff',
            'txt'=>'text/plain',
            'wdb'=>'application/vnd.ms-works',
            'wps'=>'application/vnd.ms-works',
            'xhtml'=>'application/xhtml+xml',
            'xlc'=>'application/vnd.ms-excel',
            'xlm'=>'application/vnd.ms-excel',
            'xls'=>'application/vnd.ms-excel',
            'xlt'=>'application/vnd.ms-excel',
            'xlw'=>'application/vnd.ms-excel',
            'xml'=>'text/xml, application/xml',
            'zip'=>'application/zip',
            'xlsx'=>'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'php' => 'text/html',
            'swf' => 'application/x-shockwave-flash',
            'flv' => 'video/x-flv',

            'bmp' => 'image/bmp',
            'ico' => 'image/vnd.microsoft.icon',
            'svg' => 'image/svg+xml',
            'svgz' => 'image/svg+xml',

            'rar' => 'application/x-rar-compressed',
            'exe' => 'application/x-msdownload',
            'msi' => 'application/x-msdownload',
            'cab' => 'application/vnd.ms-cab-compressed',

            'qt' => 'video/quicktime',
            'mov' => 'video/quicktime',

            'psd' => 'image/vnd.adobe.photoshop',
            'ai' => 'application/postscript',
            'eps' => 'application/postscript',
            'ps' => 'application/postscript',
            'apk' =>'application/vnd.android.package-archive',

            // open office
            'odt' => 'application/vnd.oasis.opendocument.text',
            'ods' => 'application/vnd.oasis.opendocument.spreadsheet',
        ],
        'type'=>'local',//local(本地),ftp(其他ftp存储服务器),oss(阿里云对象存储),qn(七牛对象存储)
        'oss_param'=>[ //对应需要的参数配置
            'accessKeyId'=>'',
            'accessKeySecret'=>'',
            'endpoint'=>'',
            'bucket'=>'',
            'cdn'=>''
        ],
        'qn_param'=>[
            'accessKey'=>'',
            'secretKey'=>'',
            'bucket'=>'',
            'upload'=>'',
            'cdn'=>'',
        ],
        'ftp_param'=>[
            'host'=>'',
            'username'=>'',
            'password'=>'',
            'port'=>21,
            'path'=>'/uploads/',
            'cdn'=>''
        ],
        'local_param'=>[
            'host'=>Env::get(SERVER_ENV.'DOMAIN'),
            'path'=>'/uploads/',
            'absolute_path'=>'',
            'cdn'=>'',
        ],
    ],
    'mch_domain'=>''
];
