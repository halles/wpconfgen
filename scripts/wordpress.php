<?php

include dirname(dirname(dirname(__FILE__))).'/env.php';

include dirname(dirname(__FILE__)).'/scripts/defaults.php';

$env['wp.saltkeys'] = file_get_contents('https://api.wordpress.org/secret-key/1.1/salt/');