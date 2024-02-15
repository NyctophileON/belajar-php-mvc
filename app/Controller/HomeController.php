<?php

namespace WilliamHanjaya\Belajar\PHP\MVC\Controller;

use WilliamHanjaya\Belajar\PHP\MVC\App\View;

class HomeController
{
    public function index(): void
    {
        $model = [
            "title" => "Belajar PHP MVC",
            "content" => "test"
        ];

        View::render('Home/index', $model);
    }

    public function hello(): void
    {
        echo "HomeController.hello()";
    }

    public function world(): void
    {
        echo "HomeController.world()";
    }
}