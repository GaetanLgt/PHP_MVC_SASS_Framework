<?php


namespace App\Core;

use App\Core\Application;
use App\Core\middlewares\BaseMiddleware;

abstract class Controller
{
    public string $layout = 'main';
    public string $action = '';
    /**
     * @var \App\Core\middlewares\BaseMiddleware[]
     */
    protected array $middlewares = [];

    /**
     * @return BaseMiddleware[]
     */
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }

    /**
     * @param BaseMiddleware[] $middlewares
     */
    public function setMiddlewares(array $middlewares): void
    {
        $this->middlewares = $middlewares;
    }
    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function render($view, $params = [])
    {
        return Application::$app->view->renderView($view, $params);
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }
}
