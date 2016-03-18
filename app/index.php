<?php

// Path to your craft/ folder
$craftPath = './craft';

// Path to templates folder
define('CRAFT_TEMPLATES_PATH', './assets/templates/');

// Setup environment-friendly configs
switch ($_SERVER['SERVER_NAME']) {

  case 'NOTE: ADD_CRAFT_SITE_RELATIVE_BASE_URL_HERE' :
    define('CRAFT_ENVIRONMENT', 'local');
    break;

  case '' :
    define('CRAFT_ENVIRONMENT', 'dev');
    break;

  case '' :
    define('CRAFT_ENVIRONMENT', 'staging');
    break;

  case '' :
    define('CRAFT_ENVIRONMENT', 'prod');
    break;

  default :
    define('CRAFT_ENVIRONMENT', '*');
    break;

}

// Do not edit below this line
$path = rtrim($craftPath, '/').'/app/index.php';

if (!is_file($path))
{
  if (function_exists('http_response_code'))
  {
    http_response_code(503);
  }

  exit('Could not find your craft/ folder. Please ensure that <strong><code>$craftPath</code></strong> is set correctly in '.__FILE__);
}

require_once $path;
