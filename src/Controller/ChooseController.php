<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChooseController
{
    /**
     * @return Response
     * @Route("/")
     *
     */
    public function index()
    {
        return new Response('Hallo Classei');
    }

    /**
     * @Route("/sheet/{sheetId}")
     * @return Response
     */
    public function sheet($sheetId)
    {
        return new Response(sprintf(
            'You choose sheet ID: "%s"',
            $sheetId
        ));
    }
}