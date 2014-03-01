<?php

namespace Peekmo\SfImmoBundle\Events;

use Peekmo\SfImmoBundle\Utils\ImmoResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

class RightsListener
{
    /**
     * Vérifie que l'utilisateur est bien administrateur pour accéder aux pages d'admin
     * @param GetResponseEvent $event
     */
    public function onKernelRequest(GetResponseEvent $event)
    {
        $request = $event->getRequest();

        $paths = explode('/', $request->getPathInfo());
        if ('admin' == $paths[1]) {
            if (!$request->getSession()->get('user') || !$request->getSession()->get('user')->getIsAdmin()) {
                if ($request->isXmlHttpRequest()) {
                    $event->setResponse(new ImmoResponse(false, 403, 'Accès interdit'));
                } else {
                    $event->setResponse(new RedirectResponse('/error/403'));
                }
            }
        }
    }
} 