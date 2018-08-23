<?php
define('WP_ENVIRONMENT', 'LIVE');

switch (WP_ENVIRONMENT) {
    case 'LOCAL':
        require_once('/home2/tonystr4/wp-config-local.php');
        return;
    case 'LIVE':
        require_once('/home2/tonystr4/wp-config-live.php');
        return;
    default:
        require_once('/home2/tonystr4/wp-config-live.php');
}
