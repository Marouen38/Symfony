<?php
namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/bonjour/{prenom}",name="bonjour")
     * @route("/bonjour",name="bonjour-simple")
     * @Route("/bonjour/{prenom}/{age}",name="bonjour")
     */
    public function bonjour($prenom="",$age=0){
        return new response("bonjour ! " . $prenom . " qui a " . $age . " ans");

    }    



    /**
     * @Route("/home", name="homepage")
     */
    public function Home(){

        $prenom = ["Michael" => 25, "Rachel" => 18, "Gerald" => 27];
        return $this->render('home.html.twig');
       
    }
    
    
}
