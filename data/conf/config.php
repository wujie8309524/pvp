<?php	return array (
  'SP_SITE_ADMIN_URL_PASSWORD' => '',
  'SP_DEFAULT_THEME' => 'wdfms',
  'DEFAULT_THEME' => 'wdfms',
  'SP_ADMIN_STYLE' => 'bluesky',
  'URL_MODEL' => '1',
  'URL_HTML_SUFFIX' => '',
  'COMMENT_NEED_CHECK' => 0,
  'COMMENT_TIME_INTERVAL' => 60,
  'MOBILE_TPL_ENABLED' => 0,
  'HTML_CACHE_ON' => false,
    //'配置项'=>'配置值'
    'SESSION_AUTO_START' =>true,//系统不自动启动Session
    'SESSION_OPTIONS'=>array(
        'use_trans_sid'=>1,
        'expire'=>3600,//设置过期时间session.gc_maxlifetime的值为1小时
        'path' =>SESSION_PATH,
    )

);