<?php

namespace LibraryBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
     * @Route("/books")
     */
    public function bookList() {

        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/books/id")
     */
    public function bookDetail() {

        return $this->render('default/index.html.twig');
    }

}
