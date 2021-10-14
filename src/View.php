<?php

namespace App;

use App\Exceptions\ViewNotFoundException;

class View
{
    public static function renderView(string $viewName): string
    {
        $viewDir = VIEWS_DIR . $viewName . '.php';

        if(!file_exists($viewDir))
        {
            throw new ViewNotFoundException('VIEW NOT FOUND');
        }

        return include $viewDir;
    }

}