<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
  #[Route('/', name: 'app_home')]
  public function index(): Response
  {
    $questions = [
      [
        "id" => "1",
        "title" => "Je suis une question",
        "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio blanditiis molestias ipsam maiores voluptatibus, corporis nisi atque rem repellat quod, voluptate temporibus magni inventore accusamus, dolorem possimus laudantium cum consequatur.",
        "upvote" => 20,
        "author" => [
          "name" => "Nathan Truc",
          "avatar" => "https://randomuser.me/api/portraits/men/73.jpg"
        ],
        "nbrOfResponse" => 15
      ],
      [
        "id" => "2",
        "title" => "Je suis une super question",
        "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio  rem repellat quod, voluptate temporibus magni inventore accusamus, dolorem possimus laudantium cum consequatur.",
        "upvote" => 27,
        "author" => [
          "name" => "Lisa Machin",
          "avatar" => "https://randomuser.me/api/portraits/women/16.jpg"
        ],
        "nbrOfResponse" => 73
      ],
      [
        "id" => "3",
        "title" => "Je suis encore une question",
        "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio  rem repellat quod, voluptate  dolorem possimus laudantium cum consequatur.",
        "upvote" => -2,
        "author" => [
          "name" => "Charlotte Christensen",
          "avatar" => "https://randomuser.me/api/portraits/women/24.jpg"
        ],
        "nbrOfResponse" => 6
      ],
    ];

    return $this->render('home/index.html.twig', [
      'questions' => $questions,
    ]);
  }
}
