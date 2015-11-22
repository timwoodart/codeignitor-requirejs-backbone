<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/

/*
 * Overrides the default display layout
 *
*/
$hook['display_override'] = array(
    'class'    => 'Layout',
    'function' => 'index',
    'filename' => 'Layout.php',
    'filepath' => 'hooks'
);