<?php

namespace App\Helpers\Responder;

use App\Helpers\Presenter\Interfaces\HomePresenterInterface;
use App\Helpers\Responder\Interfaces\HomeResponderInterface;
use Symfony\Component\HttpFoundation\Response;

class HomeResponder implements HomeResponderInterface
{
    /**
     * @var HomePresenterInterface
     */
    private $presenter;

    /**
     * HomeResponder constructor.
     * @param HomePresenterInterface $presenter
     */
    public function __construct(HomePresenterInterface $presenter)
    {
        $this->presenter = $presenter;
    }

    /**
     * @return Response
     */
    public function response(): Response
    {
        return new Response(
            $this->presenter->presente()
        );
    }
}
