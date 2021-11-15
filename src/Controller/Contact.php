<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class Contact extends AbstractController
{
    /**
     *@Route("/Contact", name="contact")
     */
    public function Contact()
    {
        return $this->render('contact.html.twig');
    }
}