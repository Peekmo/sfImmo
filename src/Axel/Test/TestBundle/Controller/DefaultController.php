<?php

namespace Axel\Test\TestBundle\Controller;

use Axel\Test\TestBundle\Annotation\IsPublic;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AxelTestTestBundle:Default:index.html.twig', array('name' => $name));
    }

    /**
     * @Secure(roles="ROLE_ADMIN")
     */
    public function index2Action($name)
    {
        return $this->render('AxelTestTestBundle:Default:index.html.twig', array('name' => $name));
    }
}
