<?php

namespace App\Controller;

use App\Entity\Question;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: "app_home")]
    public function index(EntityManagerInterface $em): Response
    {
        $repo = $em->getRepository(Question::class);
        $questions = $repo->findAll();

        return $this->render('home/index.html.twig', [
            'questions' => $questions,
        ]);
    }
}
