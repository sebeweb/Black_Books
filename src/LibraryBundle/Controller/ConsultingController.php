<?php

namespace LibraryBundle\Controller;

use LibraryBundle\Entity\Livre;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConsultingController
 * @Route("/consulting")
 * @author sebastien
 */
class ConsultingController extends Controller {

    /**
     * @Route("/")
     */
    public function consultingBooks() {

        return $this->render('default/index.html.twig');
    }
    /**
     * @Route("/books")
     */
    public function bookList() {
        $livres = $this->getDoctrine()->getRepository(Livre::class)->findAll();
        return new JsonResponse($livres);
    }

    /**
     * @Route("/books/id")
     */
    public function bookDetail() {

        return $this->render('default/index.html.twig');
    }

}
