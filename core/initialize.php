<?php
    defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
    defined('SITE_ROOT') ? null : define ('SITE_ROOT', __DIR__ . DS . '..');
    defined('INC_PATH') ? null : define ('INC_PATH', SITE_ROOT.DS.'includes');
    defined('CORE_PATH') ? null : define ('CORE_PATH', SITE_ROOT.DS.'core');

    // Load config file first
    require_once(INC_PATH.DS."config.php");

    // Core Classes
    require_once(CORE_PATH.DS."post.php");
?>