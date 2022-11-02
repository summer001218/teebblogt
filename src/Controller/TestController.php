<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class TestController extends AbstractController
{
    #[Route('/test/{name}', name: 'app_test')]
    public function index(string $name='weiwei'): Response
    {
        return new Response(<<<EOF
        <html>
        <head>
        <title></title>
        </head>
        <body>
        <h1>$name</h1>
        </body>
        </html>
        EOF
        );
    }
}
