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
    'app_name'              => '',
    // 应用调试模式
    'app_debug'             => true,
    // 应用Trace
    'app_trace'             => true,
    // 是否支持多模块
    'app_multi_module'      => true,
    // 注册的根命名空间
    'root_namespace'        => [],
    // 默认输出类型
    'default_return_type'   => 'html',
    // 默认语言
    'default_lang'          => 'zh-cn',
    // 应用类库后缀
    'class_suffix'          => false,
    // 控制器类后缀
    'controller_suffix'     => true,

    // +----------------------------------------------------------------------
    // | 模块设置
    // +----------------------------------------------------------------------

    // 默认模块名
    'default_module'        => 'index',
    // 禁止访问模块
    'deny_module_list'      => ['common'],
    // 默认操作名
    'default_action'        => 'index',
    // 默认的空控制器名
    'empty_controller'      => 'Error',
    // +----------------------------------------------------------------------
    // | URL设置
    // +----------------------------------------------------------------------

    // PATHINFO变量名 用于兼容模式
    'var_pathinfo'          => 's',
    // 兼容PATH_INFO获取
    'pathinfo_fetch'        => ['ORIG_PATH_INFO', 'REDIRECT_PATH_INFO', 'REDIRECT_URL'],
    // pathinfo分隔符
    'pathinfo_depr'         => '/',
    // URL伪静态后缀
    'url_html_suffix'       => 'html',
    // 默认的访问控制器层
    'url_controller_layer'  => 'controller',
    // 是否开启请求缓存 true自动缓存 支持设置请求缓存规则
    'request_cache'         => false,

    // 全局请求缓存排除规则
    'request_cache_except'  => [],
    // 默认跳转页面对应的模板文件
    'dispatch_success_tmpl' => Env::get('think_path') . 'tpl/dispatch_jump.tpl',
    'dispatch_error_tmpl'   => Env::get('think_path') . 'tpl/dispatch_jump.tpl',
    // 异常页面的模板文件
    'exception_tmpl'        => Env::get('think_path') . 'tpl/think_exception.tpl',
    // 错误显示信息,非调试模式有效
    'error_message'         => '页面错误！请稍后再试～',
    // 显示错误信息
    'show_error_msg'        => true,

    'tpl_replace_string'    => [
        '__STATIC__' => '/static',
        '__JS__'     => '/static/javascript',
    ],

];
