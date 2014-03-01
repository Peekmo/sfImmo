<?php

namespace Peekmo\SfImmoBundle\Utils;

use Symfony\Component\HttpFoundation\Request;

class ImmoService
{
    /**
     * Get referer's URL
     * @param Request $request
     * @return array|string
     */
    public function url(Request $request)
    {
        $url = $request->headers->get('referer') ? $request->headers->get('referer') : $request->getHost();
        return $url;
    }
} 