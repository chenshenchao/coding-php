<?php

const HOSTS_PATH = '/c/Windows/System32/drivers/etc/hosts';

define('CONF_DIR', dirname(__DIR__) . '/conf/conf.d');

function list_hostname()
{
    return array_map(function ($path) {
        $basename = basename($path, '.conf');
        return "{$basename}.conding.php";
    }, glob(CONF_DIR . '/*'));
}

function reset_hosts()
{
    $content = file_get_contents(HOSTS_PATH);
}
