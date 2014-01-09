<?php
require 'vendor/autoload.php';
require 'config.php';

use OpenCloud\Rackspace;

$client = new Rackspace( RS_HOST, array(
    'username' => RS_USER,
    'apiKey'   => RS_KEY
)  );