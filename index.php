<?php
require 'vendor/autoload.php';
require 'config.php';

use OpenCloud\Rackspace;
use OpenCloud\OpenStack;

/**
 * Required to accept self-signed certificates
 */

if ( 'rackspace' == OS_TYPE ) {
    $client = new Rackspace( RS_HOST, array(
        'username' => RS_USER,
        'apiKey'   => RS_KEY
    )  );
} else {
    $client = new OpenStack( RS_HOST, array(
        'username' => RS_USER,
        'password' => OS_PASS
    ) );
}

$compute = $client->computeService( '', 'ORL' );

$images = $compute->imageList();

var_dump( $images );