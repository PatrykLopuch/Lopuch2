<?php
/**
 * Task controller.
 */

namespace App\Controller;

use App\Entity\Task;
use App\Repository\TaskRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


/**
 * Class TaskController.
 *
 * @Route("/task")
 */
class TaskController extends AbstractController
{
    /**
     * Index action.
     *
     * @param \App\Repository\TaskRepository $repository Task repository
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP response
     *
     * @Route(
     *     "/",
     *     name="task_index",
     * )
     */
    public function index(Request $request, TaskRepository $repository, PaginatorInterface $paginator): Response
    {
        $pagination = $paginator->paginate(
            $repository->queryAll(),
            $request->query->getInt('page',1),
            Task::NUMBER_OF_ITEMS
        );

        return $this->render(
            'task/index.html.twig',
            ['pagination'=> $pagination]
        );
    }

    /**
     * View action.
     *
     * @param \App\Entity\Task $task Task entity
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP response
     *
     * @Route(
     *     "/{id}",
     *     name="task_view",
     *     requirements={"id": "[1-9]\d*"},
     * )
     */
    public function view(Task $task): Response
    {
        return $this->render(
            'task/view.html.twig',
            ['task' => $task]
        );
    }
}