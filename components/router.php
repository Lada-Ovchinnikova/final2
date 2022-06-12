<?php

class Router
{
    private  $routes;
    public function __construct()
    {
        include_once('./config/routes.php');
        $this->routes = $routes;
    }

    public function run()
    {
        $userUrl = $_SERVER['REDIRECT_URL'];
        $found = false;
        foreach($this->routes as $controller => $paths) {
            foreach($paths as $path => $actionWithParameters) {
                $fullPath = SITE_ROOT . $path;
                if (preg_match("~$fullPath~", $userUrl)) {
                    $actionWithParameters = preg_replace("~$fullPath~", $actionWithParameters, $userUrl);
                    $actionWithParametersArray = explode('/', $actionWithParameters);
                    $actionWithoutParameters = array_shift($actionWithParametersArray);
                    $requestedController = new $controller();
                    $found = true;
                    $action = 'action' . ucfirst($actionWithoutParameters);
                    call_user_func_array(array($requestedController, $action), $actionWithParametersArray);

                    break 2;
                }
            }
        } if (!$found) {
        //todo 404 error redirect page errorController->actionError;
    }

    }

}








