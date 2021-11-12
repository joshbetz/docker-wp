<?php

define( 'WP_CACHE_KEY_SALT', '' );

global $memcached_servers;
$memcached_servers = array(
    'default' => array(
        'memcached:11211',
    )
);
