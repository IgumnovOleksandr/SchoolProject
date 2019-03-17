<?php
class Application{
    protected $path;
    public function run() {
        DB::connect();
        $this->route();
        $this->action();
    }
    protected function route(){
        $routes = include("config/routes.php");
        $uri = trim($_SERVER["REQUEST_URI"], "/");
        $this->path = "home/page404";
        foreach ($routes as $key => $route){
            $pattern = "~^$key$~";
            if(preg_match($pattern, $uri)){
                $this->path = preg_replace($pattern, $route, $uri);
                break;
            }
        }
    }
    protected function action(){
        $parts = explode("/", $this->path);
        $controllerId = array_shift($parts);
        $actionId = array_shift($parts);
        $parameters = $parts;
        $controllerClass = ucfirst($controllerId).'Controller';
        $action = 'action'.ucfirst($actionId);
        $controller = new $controllerClass($controllerId);
        $controller->$action($parameters);
    }
}

