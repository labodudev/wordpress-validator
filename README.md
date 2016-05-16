# wordpress-validator
$_POST, $_GET, $_REQUEST and wp_verify_nonce

# How to use ?
Make a test folder in your plugin and copy nonce.test.php and request.test.php in the test folder.
* For nonce : http://yourwordpressurl.com/wp-content/plugins/yourplugin/test/nonce.test.php
* For request : http://yourwordpressurl.com/wp-content/plugins/yourplugin/test/request.test.php

# Use it with travis-ci
If you use it with travis-ci, all developper can see your WordPress plugin is properly securized.

# Some examples with travis-ci
* [Example Success](https://github.com/labodudev/wordpress-validator/tree/example_success)
* [Example Failed](https://github.com/labodudev/wordpress-validator/tree/example_failed)

# $_POST, $_GET, $_REQUEST
When you use $_POST, $_GET or $_REQUEST you need to securize it.
If they're not protected, wordpress-validator generate a fatal error.

# What is the syntax for securize it ?
Only sanitize_* function and (int) cast work for the moment.

# TODO
Valid syntax :
* if ( $test ) // work
* if( $test ) // not work
* if ($test) // not work

# Nonces
All functions or methods named with the prefix ajax_* will be checked by wordpress-validator.
If this function doesn't have wp_verify_nonce, wordpress-validator generate a fatal error.
