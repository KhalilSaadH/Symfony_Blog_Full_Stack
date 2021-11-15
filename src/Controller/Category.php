<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class Category extends AbstractController
{
    /**
     *@Route("/category", name="category")
     */
    public function Category()
    {
        return $this->render('category.html.twig');
    }
}