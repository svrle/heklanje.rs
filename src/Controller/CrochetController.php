<?php

namespace App\Controller;

use App\Entity\Crochet;
use App\Form\CrochetType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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

    /**
     * @Route("/user/crochet/new", name="user_newCrochet")
     */
    public function newAction(Request $request) {

        $crochet = new Crochet();
        $form = $this->createForm(CrochetType::class, $crochet);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($crochet);
            $em->flush();

            return $this->redirectToRoute('user_newCrochet');
        }

        return $this->render('crochet/new.html.twig', [
            'crochetForm' => $form->createView()
        ]);


    }
}
