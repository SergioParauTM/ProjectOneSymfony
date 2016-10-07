<?php

namespace ProjBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProjBundle:Default:index.html.twig');
    }

    public function productoSelectedAction($nProdcut)
    {
        return $this->render('ProjBundle:Default:Producto.html.twig', array('nProduct' => $nProdcut));
    }
}
