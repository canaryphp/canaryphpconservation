<?php
/**
 *
 * DS = DIRECTORY_SEPARATOR = (/) (slash)
 *
 */
defined('DS') OR define('DS',DIRECTORY_SEPARATOR);
/**
 *
 * CHARSET the default charset
 *
 */
defined('CHARSET') OR define('CHARSET','utf-8');
/**
 *
 * PS = PATH_SEPARATOR = (:) (Two point)
 *
 */
defined('PS') OR define('PS',PATH_SEPARATOR);
/**
 *
 * EOL = PHP_EOL = ('\n') (new line)
 *s
 */
defined('EOL') OR define('EOL',PHP_EOL);
/**
 *
 * ROOT home base url
 *
 */
defined('CPC_ROOT') OR define('CPC_ROOT',dirname(__DIR__));
/**
 *
 * HOST hostname (domainname)
 *
 */
defined('HOST') OR define('HOST',$_SERVER['HTTP_HOST']);
/**
 *
 *  LOG logs base url
 *
 */
defined('CPC_LOG') OR define('CPC_LOG',CPC_ROOT.DS.'logs');
/**
 *
 * LOCALE locale base url (translation)
 *
 */
defined('CPC_LOCALE') OR define('CPC_LOCALE',CPC_ROOT.DS.'locale');
/**
 *
 *  Default time zone
 *
 */
defined('CPC_DEFAULT_TIME_ZONE') OR define('CPC_DEFAULT_TIME_ZONE','Africa/Algiers');
/**
 *
 * local script version
 *
 */
defined('CPC_VERSION') OR define('CPC_VERSION',file_get_contents(dirname(CPC_ROOT).DS.'VERSION'));