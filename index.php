<?php

define('PATH_SYSTEM', __DIR__.'/system');
define('PATH_APPLICATION', __DIR__.'/application');

require_once(PATH_APPLICATION.'/config/config.php');
require_once(PATH_SYSTEM.'/core/LG_Common.php');
LG_load();

