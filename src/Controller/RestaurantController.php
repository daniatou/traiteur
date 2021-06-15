<?php

namespace App\Controller;

use App\Entity\Restaurant;
use App\Form\RestaurantType;
use App\Repository\RestaurantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class RestaurantController extends AbstractController
{
    public function home(): Response
    {
        return $this->render('restaurant/index.html.twig');
    }

    /**
     * @Route("/menu1", name="menu1", methods={"GET"})
     */

    public function menu1(): Response
    {
        return $this->render('restaurant/menu1.html.twig');
    }
}
