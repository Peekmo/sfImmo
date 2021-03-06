<?php

namespace Peekmo\SfImmoBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * Class AdminController
 *
 * @package Peekmo\SfImmoBundle\Controller
 * @Route("/admin")
 */
class AdminController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/index", name="admin_index")
     */
    public function indexAction(Request $request)
    {
        return $this->render('PeekmoSfImmoBundle:Admin:admin_index.html.twig');
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/equipements", name="admin_stuff")
     */
    public function stuffAction(Request $request)
    {
        return $this->render('PeekmoSfImmoBundle:Admin:admin_stuff.html.twig');
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/logements", name="admin_logements")
     */
    public function logementsAction(Request $request)
    {
        return $this->render('PeekmoSfImmoBundle:Admin:admin_logement.html.twig');
    }
} 