<?php
return [
    // 模板引擎类型 支持 php think 支持扩展
    'type' => 'Think',
    // 模板路径
    'view_path' => '',
    // 模板后缀
    'view_suffix' => 'html',
    // 模板文件名分隔符
    'view_depr' => DIRECTORY_SEPARATOR,
    // 模板引擎普通标签开始标记
    'tpl_begin' => '{',
    // 模板引擎普通标签结束标记
    'tpl_end' => '}',
    // 标签库标签开始标记
    'taglib_begin' => '{',
    // 标签库标签结束标记
    'taglib_end' => '}',
    'tpl_replace_string' => [
        "__STATIC__" => "/public/static",
        '__COMPANY__' => '成都创流科技股份有限公司',
        '__NAME__' => '天马工场后台管理系统',
        '__COMPANY_WEBSITE__' => 'www.360tianma.com',
        '__WEBSITE__' => 'www.360tianma.com',
    ],
];