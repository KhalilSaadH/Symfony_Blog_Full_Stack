<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class About extends AbstractController
{
    /**
     *@Route("/about", name="about")
     */
    public function About()
    {
        return $this->render('about.html.twig');
    }
}