<?php

namespace Axel\Test\TestBundle\Annotation;

use Axel\Test\TestBundle\Annotation\IsPublic;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\Exception\HttpException;

class AnnotationDriver
{
    private $reader;

    public function __construct($reader)
    {
        $this->reader = $reader;
    }

    public function onKernelController(FilterControllerEvent $event)
    {
        if (!is_array($controller = $event->getController())) { //return if no controller
            return;
        }

        $method = new \ReflectionMethod($controller[0], $controller[1]);
// die(json_encode(get_class($controller[0]))); 
        $secure = false;
        $pub = false;

        foreach ($this->reader->getMethodAnnotations($method) as $configuration) { //Start of annotations reading
            if($configuration instanceof IsPublic){//Found our annotation
                $pub = true;
            } else if ($configuration instanceof Secure) {
                $secure = true;
            }
        }

        // if ($secure && !$public && $controller[0]->get('security.context')->getToken()->getUser()->isPublic()) {
        if ($secure && !$pub && true) {
            // throw new HttpException(404, 'Forbidden');
        }
    }
}

?>