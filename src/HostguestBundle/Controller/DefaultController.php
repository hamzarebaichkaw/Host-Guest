<?php

namespace HostguestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render(':searchgo:index.html.twig');
    }
    public function toursAction()
    {
        return $this->render(':template:tours.html.twig');
    }
    public function aboutAction()
    {
        return $this->render(':template:about.html.twig');
    }
    public function contactAction()
    {
        return $this->render(':template:contact.html.twig');
    }
}
