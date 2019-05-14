<?php

namespace App\Controller;





use App\Repository\TestRepository;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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

    /**
     * @param TestRepository $repository
     * @param int $id
     * @return Response
     *
     * uwaga tutaj wywalało ten type-hinted, problemem byla lterowka w int w definicji funkcji
     */
 public function view(TestRepository $repository, int $id): Response
 {
     return $this->render(
         'test/view.html.twig',
         ['item'=> $repository->FindById($id)]
     );
 }
}