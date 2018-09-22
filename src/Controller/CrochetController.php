<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CrochetController extends AbstractController
{
    /**
     * @Route("/crochet", name="crochet")
     */
    public function index()
    {
        return $this->render('crochet/index.html.twig', [
            'controller_name' => 'CrochetController',
        ]);
    }
}
