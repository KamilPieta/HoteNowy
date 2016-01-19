<?php

namespace ProjektHotel\HotelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @Route("/start")
 */
class StartController extends Controller{

    
    /**
    * @Route("/index.html",
     * name="hotel_glowna")
     * 
     * 
    *
    * @Template  
    */
    public function indexAction(){
        return array();
    }
    
    /**
    * @Route("/galeria.html",
     * name="hotel_galeria")
    *
    * @Template  
    */
    public function galeriaAction(){
         return array();
    }
    
    /**
    * @Route("/kontakt.html",
     * name="hotel_kontakt")
    *
    * @Template  
    */
    public function kontaktAction(){
         return array();
    }
        /**
    * @Route("/promocje.html",
     * name="hotel_promocje")
    *
    * @Template  
    */
    public function promocjeAction(){
         return array();
    }
        /**
    * @Route("/basen.html",
     * name="hotel_basen")
    *
    * @Template  
    */
    public function basenAction(){
         return array();
    }
     /**
    * @Route("/cennik.html",
     * name="hotel_cennik")
    *
    * @Template  
    */
    public function cennikAction(){
         return array();
    }
    
      /**
    * @Route("/opinie.html",
     * name="hotel_opinie")
    *
    * @Template  
    */
    public function opinieAction(){
         return array();
    }
    
    /**
    * @Route("/rejestracja.html",
     * name="hotel_rejestracja")
    *
    * @Template  
    */
    public function rejestracjaAction(){
         
        
      $rejestracja=$this->createFormBuilder()
                ->add('name', 'text' ,array(
              'label' =>'Imie i Nazwisko',))
                ->add('nick', 'text')
                ->add('email', 'text',array('label'=>'Email', 'constraints' => array(new Assert\Email())
                    ))
              ->add('password','password',array(
                     'label'=>'Haslo',))
                ->add('rules', 'checkbox',array(
              'label' =>'Potwierdzam ze zapoznałem się z regulaminem i chciałbym zapisać się do newsletera',))
              ->add('potwierdz','submit')
                ->getForm();
        
        return array(
            'rejestracja'=> $rejestracja->createView()
        );
    }
    
    /**
    * @Route("/zaloguj.html",
     * name="hotel_zaloguj")
    *
    * @Template  
    */
    public function zalogujAction(){
       
        $login=$this->createFormBuilder()
                 ->add('login','text',array(
                     'label'=>'Podaj swoj adres email lub nick', ))
                 ->add('password','password',array(
                     'label'=>'Haslo', ))
                 ->add('potwierdz','submit')
                 ->getForm();
         
         return array( 'login'=>$login->createView());
                 
    }
    
}
