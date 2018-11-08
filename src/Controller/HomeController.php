<?php

namespace App\Controller;

use App\Helpers\Responder\Interfaces\HomeResponderInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    /**
     * @var HomeResponderInterface
     */
    private $responder;

    /**
     * HomeController constructor.
     * @param HomeResponderInterface $responder
     */
    public function __construct(HomeResponderInterface $responder)
    {
        $this->responder = $responder;
    }

    /**
     * @Route(
     *     path="/",
     *     name="home"
     * )
     */
    public function home(): Response
    {
        return $this->responder->response();
    }
}
