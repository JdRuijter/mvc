<?php
// contsants
define('APP_PATH', __DIR__);
define('APP_BASE_URL', 'http://localhost/test');

// includes
require_once 'libs/functions.php';

$controller = filter_input(INPUT_GET, 'controller', FILTER_SANITIZE_URL);
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_URL);

// set default controller and action
if ($controller === null || $action === null) {
    $controller = 'pages';
    $action = 'home';
}

$controllerClassName = ucfirst($controller) . 'Controller';
$controllerFile = 'controllers/' . $controllerClassName .'.php';

if (file_exists($controllerFile)) {
    require_once $controllerFile;
}

if (class_exists($controllerClassName)) {
    $controllerObject = new $controllerClassName();
}

if (method_exists($controllerObject, $action)) {
    $controllerObject->{$action}();
}
https://drive.google.com/open?id=1zWofsTD6UBiKP933zm8DHD58GVkxGRFl
https://textsaver.flap.tv/lists/252o

https://drive.google.com/open?id=1WR15evwAPXTagdhEjRXlQ3VQbWJszlbS
