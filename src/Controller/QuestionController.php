<?php

namespace App\Controller;

use App\Form\QuestionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class QuestionController extends AbstractController
{
  #[Route('/question/ask', name: 'app_question_form')]
  public function index(Request $request): Response
  {
    $formQuestion = $this->createForm(QuestionType::class);
    $formQuestion->handleRequest($request);

    if ($formQuestion->isSubmitted() && $formQuestion->isValid()) {
    }

    return $this->render('question/index.html.twig', [
      'form' => $formQuestion->createView(),
    ]);
  }

  #[Route('/question/{id}', name: 'app_question_show')]
  public function show(Request $request, string $id): Response
  {


    $question = [
      "title" => "Je suis une question",
      "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio blanditiis molestias ipsam maiores voluptatibus, corporis nisi atque rem repellat quod, voluptate temporibus magni inventore accusamus, dolorem possimus laudantium cum consequatur.",
      "upvote" => 20,
      "author" => [
        "name" => "Nathan Truc",
        "avatar" => "https://randomuser.me/api/portraits/men/73.jpg"
      ],
      "nbrOfResponse" => 15
    ];

    return $this->render('question/show.html.twig', [
      'question' => $question,
    ]);
  }
}
