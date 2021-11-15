<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class SinglePost extends AbstractController
{
    /**
     *@Route("/article_preview", name="article_preview")
     */
    public function SinglePost()
    {
        return $this->render('single-standardcop.html.twig');
    }
}