<?php
define('WP_ENVIRONMENT', 'LIVE');

switch (WP_ENVIRONMENT) {
    case 'LOCAL':
        require_once('../wp-config-local.php');
        return;
    case 'LIVE':
        require_once('../wp-config-live.php');
        return;
    default:
        require_once('../wp-config-live.php');
}
