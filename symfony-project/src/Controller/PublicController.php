<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PublicController extends AbstractController
{
    /**
     * @Route("/", name="default_homepage")
     */
    public function index()
    {
        $title = 'Home Page';
        $template = 'public/index.html.twig';
        $args = [
          'title' => $title
        ];
        return $this->render($template, $args);
    }

    /**
     * @Route("/about", name="default_about")
     */
    public function about()
    {
        $title = 'About Page';
        $template = 'public/about.html.twig';
        $args = [
          'title' => $title
        ];
        return $this->render($template, $args);
    }
}
