<?php

namespace App\Helpers\Responder\Interfaces;

use Symfony\Component\HttpFoundation\Response;

interface HomeResponderInterface
{
    /**
     * @return Response
     */
    public function response(): Response;
}