<?php

namespace Peekmo\SfImmoBundle\Controller;

use Peekmo\SfImmoBundle\Entity\Equipement;
use Peekmo\SfImmoBundle\Utils\ImmoResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * Class AdminJsonController
 *
 * @package Peekmo\SfImmoBundle\Controller
 * @Route("/json/admin")
 */
class AdminJsonController extends Controller
{
    private function save($entity)
    {
        $em = $this->getDoctrine()->getManager();
        $em->persist($entity);
        $em->flush();
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/equipements")
     * @Method({"GET"})
     */
    public function getEquipementsAction(Request $request)
    {
        $equipements = $this->getDoctrine()->getRepository('PeekmoSfImmoBundle:Equipement')->findAll();

        $final = array();
        foreach ($equipements as $equip) {
            $final[] = array(
                'id' => $equip->getId(),
                'nom' => $equip->getNom()
            );
        }

        return new ImmoResponse(true, 200, 'Success', $final);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/equipements")
     * @Method({"POST"})
     */
    public function postEquipementsAction(Request $request)
    {
        $data = $request->request->all();

        if (empty($data['nom'])) {
            return new ImmoResponse(false, 412, 'Vous devez spécifier un nom');
        }

        $equip = new Equipement();
        $equip->setNom($data['nom']);

        $this->save($equip);

        return $this->getEquipementsAction($request);
    }
} 