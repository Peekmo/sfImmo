<?php

namespace Peekmo\SfImmoBundle\Utils;

use Symfony\Component\HttpFoundation\JsonResponse;

class ImmoResponse extends JsonResponse
{
    /**
     * Constructor
     *
     * @param bool  $success
     * @param int   $code
     * @param string $info
     * @param mixed $data
     */
    public function __construct($success, $code, $info, $data = array())
    {
        parent::__construct(array(
                'success' => $success,
                'code' => $code,
                'info' => $info,
                'data' => $data
            )
        );
    }
} 