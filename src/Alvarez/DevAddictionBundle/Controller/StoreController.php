<?php

namespace Alvarez\DevAddictionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class StoreController extends Controller
{
    /**
     * @Template()
     **/
    public function indexAction()
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $stores = $em->createQuery('SELECT count(s.id) AS total FROM '.
            'Alvarez\DevAddictionBundle\Entity\Store s')->getSingleScalarResult();
        return array('stores' => $stores);
    }

    /**
     * @Template()
     **/
    public function storeAction($store)
    {
        return array('store' => $store);
    }
}
