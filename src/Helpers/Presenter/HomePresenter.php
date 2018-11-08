<?php

namespace App\Helpers\Presenter;

use App\Helpers\Presenter\Interfaces\HomePresenterInterface;
use Twig\Environment;
use Twig_Error_Loader;
use Twig_Error_Runtime;
use Twig_Error_Syntax;

class HomePresenter implements HomePresenterInterface
{
    /**
     * @var Environment
     */
    private $twig;

    /**
     * HomePresenter constructor.
     * @param Environment $twig
     */
    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @return string
     *
     * @throws Twig_Error_Loader
     * @throws Twig_Error_Runtime
     * @throws Twig_Error_Syntax
     */
    public function presente(): string
    {
        return $this->twig->render('base.html.twig');
    }
}
