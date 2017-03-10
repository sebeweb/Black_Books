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
 *
 * @author sebastien
 */
class ConsultingController extends Controller {

    /**
     * @Route("/book")
     */
    public function getBook() {

        return $this->render('default/index.html.twig');
    }

}
