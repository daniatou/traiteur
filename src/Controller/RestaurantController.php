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

    /**
     * @Route("/menu2", name="menu2", methods={"GET"})
     */

    public function menu2(): Response
    {
        return $this->render('restaurant/menu2.html.twig');
    }
    /**
     * @Route("/menu3", name="menu3", methods={"GET"})
     */

    public function menu3(): Response
    {
        return $this->render('restaurant/menu3.html.twig');
    }

    /**
     * @Route("/menu4", name="menu4", methods={"GET"})
     */

    public function menu4(): Response
    {
        return $this->render('restaurant/menu4.html.twig');
    }

    /**
     * @Route("/menu5", name="menu5", methods={"GET"})
     */

    public function menu5(): Response
    {
        return $this->render('restaurant/menu5.html.twig');
    }
    /**
     * @Route("/menu6", name="menu6", methods={"GET"})
     */

    public function menu6(): Response
    {
        return $this->render('restaurant/menu6.html.twig');
    }

    /**
     * @Route("/devis", name="devis", methods={"GET"})
     */

    public function demander_devis(): Response
    {
        return $this->render('restaurant/devis.html.twig');
    }
}
