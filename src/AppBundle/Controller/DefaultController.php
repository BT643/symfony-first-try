<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/app/example", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig', array(
                'user' => array('name' => 'Ben')
            )
        );
    }

    public function topArticlesAction()
    {
        $articles = array(
            'Article1' => 'Exciting News Article 1',
            'Article2' => 'Exciting News Article 2'
        );

        return $this->render('default/top_articles.html.twig', array(
            'articles' => $articles,
        ));
    }

    /**
     * @Route("/hello/{name}", name="hello")
     */
    public function helloAction($name)
    {
        return $this->render('default/hello.html.twig', array(
            'name' => $name
        ));
    }
}
