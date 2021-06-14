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
     * @Route("/", name="restaurant_show", methods={"GET"})
     */

    public function show(): Response
    {
        return $this->render('restaurant/show.html.twig');
    }
}
