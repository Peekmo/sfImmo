<?php

namespace Peekmo\SfImmoBundle\Controller;

use Peekmo\SfImmoBundle\Entity\Utilisateur;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/", name="index")
     */
    public function indexAction(Request $request)
    {
        return $this->render('PeekmoSfImmoBundle:Default:client_base.html.twig');
    }

    /**
     * @param Request $request
     * @param int     $num
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Route("/error/{num}")
     */
    public function errorAction(Request $request, $num)
    {
        return $this->render('PeekmoSfImmoBundle:Default\Errors:' . $num . '.html.twig');
    }
} 