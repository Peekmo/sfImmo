<?php

namespace Peekmo\SfImmoBundle\Controller;

use Peekmo\SfImmoBundle\Entity\Utilisateur;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * Class AuthController
 *
 * @package Peekmo\SfImmoBundle\Controller
 * @Route("/user")
 */
class AuthController extends Controller
{
    /**
     * @param Request $request
     * @Route("/login")
     * @return mixed
     */
    public function connexionController(Request $request)
    {
        $form = 'PeekmoSfImmoBundle:Auth:form.html.twig';
        $logged = 'PeekmoSfImmoBundle:Auth:logged.html.twig';

        if ($request->isMethod('POST')) {
            $data = $request->request->all();

            $user = new Utilisateur();
            foreach ($data as $key => $value) {
                $method = 'set' . ucfirst($key);
                if (!method_exists($user, $method)) {
                    continue;
                }

                $user->$method($value);
            }

            $errors = $this->get('validator')->validate($user);
            if (count($errors) > 0) {
                $this->get('logger')->debug(print_r($errors));
                return $this->render($logged);
            }

            return $this->render($form, array('errors' => $errors));
        }

        return $this->render($form);
    }
} 