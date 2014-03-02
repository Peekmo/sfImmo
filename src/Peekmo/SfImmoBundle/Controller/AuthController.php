<?php

namespace Peekmo\SfImmoBundle\Controller;

use Peekmo\SfImmoBundle\Entity\Utilisateur;
use Peekmo\SfImmoBundle\Utils\ImmoResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
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
     * @Route("/register", name="register")
     * @return mixed
     */
    public function registerController(Request $request)
    {
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

            return new ImmoResponse(false, 412, 'Les données sont invalides', $errors);
        }

        $url = $this->get('pk.immo.utils')->url($request);

        return new ImmoResponse(true, 302, $url);
    }

    /**
     * @param Request $request
     * @Route("/login")
     * @return mixed
     */
    public function loginController(Request $request)
    {
        $search = array(
            'email'    => $request->request->get('email'),
            'password' => $request->request->get('password')
        );
        if (!$user = $this->getDoctrine()->getRepository('Peekmo\SfImmoBundle\Entity\Utilisateur')->findOneBy($search)) {
            return new ImmoResponse(false, 404, 'Email ou mot de passe invalide');
        }

        $request->getSession()->set('user', $user);

        $url = $this->get('pk.immo.utils')->url($request);

        return new ImmoResponse(true, 302, $url);
    }

    /**
     * @param Request $request
     * @Route("/logout", name="logout")
     * @return mixed
     */
    public function logoutController(Request $request)
    {
        $request->getSession()->remove('user');
        return new RedirectResponse('/');
    }
} 