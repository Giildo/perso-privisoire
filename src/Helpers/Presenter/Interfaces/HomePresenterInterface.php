<?php

namespace App\Helpers\Presenter\Interfaces;

use Twig_Error_Loader;
use Twig_Error_Runtime;
use Twig_Error_Syntax;

interface HomePresenterInterface
{
    /**
     * @return string
     *
     */
    public function presente(): string;
}