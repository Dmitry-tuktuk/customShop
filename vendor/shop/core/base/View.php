<?php

namespace shop\base;

use shop\App;

class View
{
    use TParams;

    public function __construct($route, $layout = '', $view = '', $meta)
    {
        $this->route = $route;
        $this->view = $view;
        $this->controller = $route['controller'];
        $this->model = $route['controller'];
        $this->prefix = $route['prefix'];
        $this->meta = $meta;

        if ($layout === false){
            $this->layout = false;
        } else {
            $this->layout = $layout ?: LAYOUT;
        }
    }

    public function render($data)
    {
        $viewFile = APP . "/views/{$this->prefix}{$this->controller}/{$this->view}" . '.php';

        if (is_file($viewFile)){
            ob_start();
            require_once $viewFile;
            $content = ob_get_clean();
        } else {
            throw new \Exception("Не найден вид {$viewFile}", 500);
        }

        if (false !== $this->layout){
             $layoutFile = APP . "/views/layouts/{$this->layout}.php";
            if (is_file($layoutFile)){
                require_once $layoutFile;
            }else {
                throw new \Exception("Не найден шаблон {$this->layout}", 500);
            }
        }

    }

    public function setMeta()
    {

    }
}