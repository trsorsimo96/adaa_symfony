<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController {

    /**
     * Hello world, avec Twig cette fois :)
     *
     * @Route("/home/{name}", name="hello")
     */
    public function home($name)
    {
        return $this->render('home.html.twig', ['name' => $name]);
    }
}


?>