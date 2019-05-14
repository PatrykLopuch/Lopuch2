<?php

/**
 *
 * Hello World Controller
 *
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HelloWorldController
 * @package App\Controller
 *
 *
 */

class HelloWorldController extends AbstractController
{
    /**
     * @return Response
     *
     * @Route("/hello/{name}",
     *     defaults={"name":"World"})
     */
    public function index(string $name): Response
    {
//        return new Response('Hello '.$name.'!');
        return $this->render('hello-world/index.html.twig',
            ['name' => $name]);
    }

}