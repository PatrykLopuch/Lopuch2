<?php

namespace App\Controller;





use App\Repository\TestRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Flex\Response;

/**
 * Class TestController
 * @package App\Controller
 * @Route("/test")
 */
class TestController extends AbstractController
{
    /**
     * @param TestRepository $repository
     * @return Response
     * @Route("/",
     *     name="test_index")
     */
 public function index(TestRepository $repository): Response
 {

     return $this->render(
         'test/index.html.twig',
         ['data'=> $repository->FindAll()]
     );
 }
}