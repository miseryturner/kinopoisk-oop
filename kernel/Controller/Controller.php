<?php

namespace App\Kernel\Controller;

use App\Kernel\View\View;
use \App\Kernel\Http\Request;

abstract class Controller
{
    private View $view;
    private Request $request;

    public function view(string $name): void
    {
        $this->view->page($name);
    }

    public function setView(View $view): void
    {
        $this->view = $view;
    }

    public function request(): Request
    {
        return $this->request;
    }

    public function setRequest(Request $request): void
    {
        $this->request = $request;
    }
}