<?php


use \think\Request;

$basename = Request::instance()->root();
if (pathinfo($basename, PATHINFO_EXTENSION) == 'php') {
    $basename = dirname($basename);
}

return [
    // +----------------------------------------------------------------------
    // | 应用设置
    // +----------------------------------------------------------------------

    // 应用命名空间
    'app_namespace' => 'app',
    // 应用调试模式
    'app_debug' => false,
    // 应用Trace
    'app_trace' => false,
    // 应用模式状态
    'app_status' => '',
    // 是否支持多模块
    'app_multi_module' => true,
    // 入口自动绑定模块
    'auto_bind_module' => false,
    // 注册的根命名空间
    'root_namespace' => [],
    // 扩展函数文件
    'extra_file_list' => [APP_PATH . 'helper.php', THINK_PATH . 'helper' . EXT],
    // 默认输出类型
    'default_return_type' => 'html',
    // 默认AJAX 数据返回格式,可选json xml ...
    'default_ajax_return' => 'json',
    // 默认JSONP格式返回的处理方法
    'default_jsonp_handler' => 'jsonpReturn',
    // 默认JSONP处理方法
    'var_jsonp_handler' => 'callback',
    // 默认时区
    'default_timezone' => 'PRC',
    // 是否开启多语言
    'lang_switch_on' => false,
    // 默认全局过滤方法 用逗号分隔多个
    'default_filter' => 'htmlspecialchars,trim',
    // 默认语言
    'default_lang' => 'zh-cn',
    // 应用类库后缀
    'class_suffix' => false,
    // 控制器类后缀
    'controller_suffix' => false,

    // +----------------------------------------------------------------------
    // | 模块设置
    // +----------------------------------------------------------------------


    // 默认模块名
    'default_module' => 'index',
    // 禁止访问模块
    'deny_module_list' => ['common', 'platform'],
    // 默认控制器名
    'default_controller' => 'Index',
    // 默认操作名
    'default_action' => 'index',
    // 默认验证器
    'default_validate' => '',
    // 默认的空控制器名
    'empty_controller' => 'Error',
    // 操作方法后缀
    'action_suffix' => '',
    // 自动搜索控制器
    'controller_auto_search' => false,

    // +----------------------------------------------------------------------
    // | URL设置
    // +----------------------------------------------------------------------

    // PATHINFO变量名 用于兼容模式
    'var_pathinfo' => 's',
    // 兼容PATH_INFO获取
    'pathinfo_fetch' => ['ORIG_PATH_INFO', 'REDIRECT_PATH_INFO', 'REDIRECT_URL'],
    // pathinfo分隔符
    'pathinfo_depr' => '/',
    // URL伪静态后缀
    'url_html_suffix' => 'html',
    // URL普通方式参数 用于自动生成
    'url_common_param' => false,
    // URL参数方式 0 按名称成对解析 1 按顺序解析
    'url_param_type' => 0,
    // 是否开启路由
    'url_route_on' => true,
    // 路由使用完整匹配
    'route_complete_match' => false,
    // 路由配置文件（支持配置多个）
    'route_config_file' => ['route'],
    // 是否强制使用路由
    'url_route_must' => false,
    // 域名部署
    'url_domain_deploy' => false,
    // 域名根，如thinkphp.cn
    'url_domain_root' => '',
    // 是否自动转换URL中的控制器和操作名
    'url_convert' => true,
    // 默认的访问控制器层
    'url_controller_layer' => 'controller',
    // 表单请求类型伪装变量
    'var_method' => '_method',
    // 表单ajax伪装变量
    'var_ajax' => '_ajax',
    // 表单pjax伪装变量
    'var_pjax' => '_pjax',
    // 是否开启请求缓存 true自动缓存 支持设置请求缓存规则
    'request_cache' => false,
    // 请求缓存有效期
    'request_cache_expire' => null,

    // +----------------------------------------------------------------------
    // | 模板设置
    // +----------------------------------------------------------------------

    'template' => [
        // 模板引擎类型 支持 php think 支持扩展
        'type' => 'Think',
        // 模板路径
        'view_path' => '',
        // 模板后缀
        'view_suffix' => 'html',
        // 模板文件名分隔符
        'view_depr' => DS,
        // 模板引擎普通标签开始标记
        'tpl_begin' => '{',
        // 模板引擎普通标签结束标记
        'tpl_end' => '}',
        // 标签库标签开始标记
        'taglib_begin' => '{',
        // 标签库标签结束标记
        'taglib_end' => '}',
    ],

    // 视图输出字符串内容替换
    'view_replace_str' => [
        '__assets__' => $basename . '/assets',
        '__uploads__' => $basename . '/upload',
        '__image__' => $basename . '/assets/images',
        '__style__' => $basename . '/assets/css',
        '__script__' => $basename . '/assets/js',
        '__lkversion__' => AKF_VERSION,
        '__static__' => $basename . '/static',
        '__libs__' => $basename . '/assets/libs'
    ],
    // 默认跳转页面对应的模板文件
    'dispatch_success_tmpl' => THINK_PATH . 'tpl' . DS . 'dispatch_jump.tpl',
    'dispatch_error_tmpl' => THINK_PATH . 'tpl' . DS . 'dispatch_jump.tpl',

    // +----------------------------------------------------------------------
    // | 异常及错误设置
    // +----------------------------------------------------------------------

    // 异常页面的模板文件
    'exception_tmpl' => APP_PATH . 'common' . DS . 'tpl' . DS . 'think_exception.tpl',

    // 错误显示信息,非调试模式有效
    'error_message' => '',
    // 显示错误信息
    'show_error_msg' => true,
    // 异常处理handle类 留空使用 \think\exception\Handle
    'exception_handle' => '',

    // +----------------------------------------------------------------------
    // | 日志设置
    // +----------------------------------------------------------------------

    'log' => [
        // 日志记录方式，内置 file socket 支持扩展
        'type' => 'File',
        // 日志保存目录
        'path' => LOG_PATH,
        // 日志记录级别
        'level' => [],
    ],

    // +----------------------------------------------------------------------
    // | Trace设置 开启 app_trace 后 有效
    // +----------------------------------------------------------------------
    'trace' => [
        // 内置Html Console 支持扩展
        'type' => 'Html',
    ],

    // +----------------------------------------------------------------------
    // | 缓存设置
    // +----------------------------------------------------------------------

    'cache' => [
        // 驱动方式
        'type' => 'File',
        // 缓存保存目录
        'path' => CACHE_PATH,
        // 缓存前缀
        'prefix' => '',
        // 缓存有效期 0表示永久缓存
        'expire' => 0,
    ],

    // +----------------------------------------------------------------------
    // | 会话设置
    // +----------------------------------------------------------------------

    'session' => [
        'id' => '',
        // SESSION_ID的提交变量,解决flash上传跨域
        'var_session_id' => '',
        // SESSION 前缀
        'prefix' => '',
        // 驱动方式 支持redis memcache memcached
        'type' => '',
        // 是否自动开启 SESSION
        'auto_start' => true,
    ],

    // +----------------------------------------------------------------------
    // | Cookie设置
    // +----------------------------------------------------------------------
    'cookie' => [
        // cookie 名称前缀
        'prefix' => '',
        // cookie 保存时间
        'expire' => 0,
        // cookie 保存路径
        'path' => '/',
        // cookie 有效域名
        'domain' => '',
        //  cookie 启用安全传输
        'secure' => false,
        // httponly设置
        'httponly' => '',
        // 是否使用 setcookie
        'setcookie' => true,
    ],

    // 分页配置
    'paginate' => [
        'type' => 'bootstrap',
        'var_page' => 'page',
        'list_rows' => 10,
    ],

    // 验证码设置

    'captcha' => [
        // 验证码加密密钥
        'seKey' => 'AdminSystem',
        // 验证码字符集合
        'codeSet' => '2345678abcdefhijkmnpqrstuvwxyzABCDEFGHJKLMNPQRTUVWXY',
        // 验证码过期时间（s）
        'expire' => 1800,
        // 验证码字体大小(px)
        'fontSize' => 26,
        // 是否画混淆曲线
        'useCurve' => false,
        // 是否添加杂点
        'useNoise' => true,
        // 验证码图片高度
        'imageH' => 0,
        // 验证码图片宽度
        'imageW' => 0,
        // 验证码位数
        'length' => 4,
        // 验证码字体，不设置随机获取
        'fontttf' => '5.ttf',
        // 背景颜色
        'bg' => [243, 251, 254],
    ],

    // 自定义错误页面
    'http_exception_template' => [
        // 定义404错误重定向
        403 => APP_PATH . '403.html',
        404 => APP_PATH . '404.html',
        500 => APP_PATH . '500.html',
    ],

    //+----------------------------------------------------------------------
    // | Token设置
    // +----------------------------------------------------------------------
    'token' => [
        // 驱动方式
        'type' => 'Mysql',
        // 缓存前缀
        'key' => 'i3d6o32wo8fvs1fvdpwens',
        // 加密方式
        'hashalgo' => 'ripemd160',
        // 缓存有效期 0表示永久缓存
        'expire' => 0,
    ],

    'service_lang' => 'cn',

    //注册免费试用天数
    'default_reg_day' => 3,

    //是否开启注册:1开启0关闭
    'open_reg' => 1,

    'lang' => [
        'cn' => '中文简体',
        'tc' => '中文繁体',
        'en' => '英文',
        'vi' => '越南语',
        'rus' => '俄语',
        'id' => '印尼语',
        'th' => '泰语',
        'jp' => '日语',
        'kr' => '韩语',
        'es' => '西班牙语',
        'fra' => '法语',
        'it' => '意大利语',
        'de' => '德语',
        'pt' => '葡萄牙语',
        'ara' => '阿拉伯语',
        'dan' => '丹麦语',
        'el' => '希腊',
        'nl' => '荷兰',
        'pl' => '波兰',
        'fin' => '芬兰',
    ],

    'country' => [
        'cn' => '中国',
        'tc' => '中文繁体',
        'en' => '美国',
        'vi' => '越南',
        'rus' => '俄罗斯',
        'id' => '印度尼西亚',
        'th' => '泰国',
        'jp' => '日本',
        'kr' => '韩国',
        'es' => '西班牙',
        'fra' => '法国',
        'it' => '意大利',
        'de' => '德国',
        'pt' => '葡萄牙',
        'ara' => '阿拉伯',
        'dan' => '丹麦',
        'el' => '希腊',
        'nl' => '荷兰',
        'pl' => '波兰',
        'fin' => '芬兰',
    ],

    'lang_trans' => [
        'cn' => 'zh',
        'tc' => 'cht',
        'en' => 'en',
        'vi' => 'vie',
        'rus' => 'ru',
        'id' => 'id',
        'th' => 'th',
        'jp' => 'jp',
        'kr' => 'kor',
        'es' => 'spa',
        'fra' => 'fra',
        'it' => 'it',
        'de' => 'de',
        'pt' => 'pt',
        'ara' => 'ara',
        'dan' => 'dan',
        'el' => 'el',
        'nl' => 'nl',
        'pl' => 'pl',
        'fin' => 'fin',
    ],
];