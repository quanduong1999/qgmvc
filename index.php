<?php

    $controllerName = ucfirst(strtoLower($_REQUEST['controller'] ?? 'welcome')).'Controller';
    $actionName = $_REQUEST['action'] ?? 'index';
    require "./Controllers/${controllerName}.php";

    $objectController = new $controllerName;
    $objectController->$actionName();
?>