<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Card\Card;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CardGameController extends AbstractController
{
    #[Route("/card", name: "game_start")]
    public function home(): Response
    {
        return $this->render('card.html.twig');
    }
    #[Route("/card/deck", name: "deck")]
    public function deck(): Response
    {
        return $this->render('deck.html.twig');
    }
}